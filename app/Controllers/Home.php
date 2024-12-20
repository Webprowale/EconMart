<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('page');
    }

    public function electronic()
    {
        return view('electronic');
    }
    public function login()
    {
        return view('auth/login');
    }
    public function register()
    {
        return view('auth/register');
    }
    
}
