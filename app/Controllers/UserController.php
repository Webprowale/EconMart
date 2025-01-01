<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
use App\Models\ProductModel;
use App\Models\PayModel;
class UserController extends BaseController
{
    public function __construct()
    {
        
        $this->dbUser = new UserModel();
        $this->dbProduct = new ProductModel();
        $this->dbPay = new PayModel();
    }
    public function login()
    {
        helper(['form', 'url']);
        $validation = $this->validate([
            'email' => 'required|valid_email',
            'password' => 'required|min_length[8]',
        ]);
    
        if ($validation) {
            $data = [
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
            ];
    
            $user = $this->dbUser->checkUser($data['email']);
            if (!$user) {
                return view('auth/login', ['usererror' => 'Invalid email']);
            }
    
            $pass = password_verify($data['password'], $user['password']);
            if ($pass) {
                $session = session();
                $session->set('user', [
                    'id'=> $user['id'],
                    'name' => $user['name'],
                    'email' => $user['email']
                ]);
    
                return redirect()->to(base_url());
            }
    
            return view('auth/login', ['passError' => 'Invalid password']);
        }
    
        return view('auth/login', ['errors' => $this->validator->getErrors()]);
    }
    
    public function register()
    {
        
        $this->validate([
            'username' => 'required|string|is_unique[users.username]',
            'address' => 'required|string',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' =>  'required|min_length[8]',
        ]);

        if ($this->validator->run()) {
            $data = [
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
                'address' => $this->request->getPost('address'),
                'role' => 'user',
            ];
            $this->dbUser->addUser($data);
            return redirect()->to(site_url('login'));
            
        } 
            return view('auth/register', ['errors' => $this->validator->getErrors()]);

    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(site_url('login'));
    }

    public function addToCart($id)
    {
        $session = session();
        $product = $this->dbProduct->find($id) ;

        if ($product) {
            $cart = $session->get('cart') ?? [];
            if (isset($cart[$id])) {
                $cart[$id]['quantity'] += 1;
            } 
                $cart[$id] = [
                    'id' => $product['id'],
                    'name' => $product['name'],
                    'price' => $product['price'],
                    'quantity' => 1
                ];
        
            $session->set('cart', $cart);
            $session->setFlashdata('success', 'Product added to cart successfully!');
        } 
            $session->setFlashdata('error', 'Product not found.');
        
        return redirect()->to(base_url());
    }
    public function process_payment($product_id)
    {
        $product = $this->dbProduct->find($product_id);
        $client = service('curlrequest');
        $user = session()->get('user');
        $amount = $product['price'];
        $paystackSecretKey = 'sk_test_f4400c1f3229dcff5b6fa7efd1dad062f90dc1d4';
        $paystackUrl = "https://api.paystack.co/transaction/initialize";
        $ref =   uniqid() . '_' . time();
        $data = [
            'email' => $user['email'],
            'amount' => $amount * 100,
            'reference' => $ref,
            'metadata'=>[
                'pay_id' => $product['id'],
                'name' => $product['name'],
                'description' => $product['description']
            ],
            'callback_url' => base_url('payment/callback') 
        ];
        $initData = [
            'user_id'=> $user['id'],
            'status' => 'pending',
            'product_id' => $product['id'],
            'ref'=> $ref,
            'amount' => $product['price']
        ];
        $initalPay = $this->dbPay->insert($initData);
        if($initalPay){
        $response = $client->post($paystackUrl, [
            'http_errors' => false, 
            'headers' => [
                'Authorization' => 'Bearer ' . $paystackSecretKey,
                'Content-Type' => 'application/json',
                'Cache-Control' => 'no-cache' 
            ],
            'json' => $data
        ]);
        $responseBody = json_decode($response->getBody(), true);

        if (isset($responseBody['status']) && $responseBody['status'] === true) {
            return redirect()->to($responseBody['data']['authorization_url']);
        } 
    }
            return redirect()->back()->with('error', 'Payment initialization failed.');
        
    }

    public function callback()
    {
        $trxref = $this->request->getGet('reference');
        $client = service('curlrequest');
        $paystackSecretKey = 'sk_test_f4400c1f3229dcff5b6fa7efd1dad062f90dc1d4';
        $paystackUrl = "https://api.paystack.co/transaction/verify/" .$trxref;
        $response = $client->get($paystackUrl, [
            'http_errors' => false, 
            'headers' => [
                'Authorization' => 'Bearer '. $paystackSecretKey,
            ]
        ]
      );
      $responseBody = json_decode($response->getBody(), true);
  
      if (isset($responseBody['status']) && $responseBody['status'] === true) {
          if ($responseBody['data']['status'] === 'success') {
              $payId = $responseBody['data']['metadata']['pay_id'];
              $verifyPrice = $this->dbProduct->where('id', $payId)->first();
      
              $reference = $responseBody['data']['reference'];
      
              if ($verifyPrice && $verifyPrice['price'] == $responseBody['data']['amount'] / 100) {
                  if (isset($reference)) {
                      if($responseBody['data']['status'] =='success'){
                      $updateS = ['status' => 'success'];
                      $dbPay = $this->dbPay->where('ref', $reference)->set($updateS)->update();
                      return redirect()->to('/')->with('success', 'Payment Successful');
                      if (!$dbPay) {
                          return redirect()->to('/')->with('error', 'Payment failed');
                      }
                  }
                  $updateF = ['status'=> 'failed'];
                   $this->dbPay->where('ref', $reference)->set($updateF)->update();
                  return redirect()->to('/')->with('error', 'payment Failed');
  
                  } 
                  return redirect()->to('/')->with('error', 'Reference not found');
              }
              
              return redirect()->to('/')->with('error', 'Price mismatch or payment invalid');
          }
          return redirect()->to('/')->with('error', 'Payment status not successful');
      } 
      return redirect()->to('/')->with('error', 'Payment status non-verify');
      
  
  
    }
    
}

