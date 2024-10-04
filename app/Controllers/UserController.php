<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
use App\Models\ProductModel;
class UserController extends BaseController
{
    public function __construct()
    {
        
        $this->dbUser = new UserModel();
        $this->dbProduct = new ProductModel();
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
                $session->set('user_id', $user['id']);
                $session->set('user_email', $user['email']);
                $session->set('username', $user['name']);
    
                return redirect()->to(base_url());
            }
    
            return view('auth/login', ['passError' => 'Invalid password']);
        }
    
        return view('auth/login', ['errors' => $this->validator->getErrors()]);
    }
    
    public function register()
    {
        
        $this->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'email' => 'required|valid_email|is_unique[user.email]',
            'password' =>  'required|min_length[8]',
        ]);

        if ($this->validator->run()) {
            $data = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
                'address' => $this->request->getPost('address'),
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
        
        return redirect()->to('/');
    }
    
}

