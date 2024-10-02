<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ControlController extends BaseController
{
    public function index()
    {
        return view('control/product');
    }
    public function createProduct()
    {
     return view('control/create-product');
    }
    public function editProduct($product)
    {
      return view('control/edit-product', ['product'=> $product]);
    }
}
