<?php

namespace App\Controllers;
use App\Models\CategoryModel;
use App\Models\ProductModel;

class Home extends BaseController
{
    
    public function index(): string
    {
        $productModel = new ProductModel();  
        $products = $productModel->findAll(); 
        
        return view('page', ['products' => $products]);  
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
