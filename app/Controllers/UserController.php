<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
class UserController extends BaseController
{
    public function __construct()
    {
        
        $this->dbUser = new UserModel();
    }
    public function login()
    {
        helper(['form', 'url']);
        $data = [
            'email' => $this->request->getPost('email'),
            'password' =>  $this->request->getPost('password'),
        ];
        $user = $this->dbUser->checkUser($data['email']);
        if (!$user) {
            return view('login', ['usererror' => 'Invalid email']);
        }
            $pass = password_verify($data['password'], $user['password']);
            if ($pass) {
                $session = session();
                    $session->set('user_id', $user['id']);
                    $session->set('user_email', $user['email']);
                    $session->set('username', $user['name']);                
            }
        }
    
    public function register()
    {
        
        $this->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'email' => 'required|valid_email',
            'password' =>  'required|min_length[8]',
        ]);

        if ($this->validator->run()) {
            $data = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
                'address' => $this->request->getPost('address'),
            ];
            if ($this->dbUser->checkUser($data['email'])) {
                return view('register', ['emailerror' => 'Email already in use']);
            }
            $this->dbUser->register($data);
            return redirect()->to(site_url('login'));
        } else {
            return view('register', ['errors' => $this->validator->getErrors()]);
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(site_url('login'));
    }
}

