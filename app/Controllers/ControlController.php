<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use App\Models\CategoryModel;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class ControlController extends BaseController
{
  protected $dbProduct;
  protected $dbCate;
  protected $productCount;
  protected $walletCount;
  public function __construct()
  {
      $this->dbProduct = new ProductModel();
      $this->dbCate = new CategoryModel();
      $this->dbUser = new UserModel();
      $this->walletCount = 0;
      $this->productCount = $this->dbProduct->countProduct();
      \Config\Services::renderer()->setData([
          'productCount' => $this->productCount,
          'walletBalance' => $this->walletCount,
          'userCount'   => $this->dbUser->countUser(),
      ], 'global');
  }
    public function index()
    {
      $product = $this->dbProduct->get_products();
      return view('control/product', ['products'=> $product]);
      
    }
    public function createProduct()
    {
      $categories = $this->dbCate->getAllCate();
      return view('control/create-product', ['categories'=> $categories]);
    }
    public function storeProduct()
    {
      $categories = $this->dbCate->getAllCate();

      $validation = $this->validate([
        'name'=> 'required|string',
        'image'=> 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/png]|max_size[image,2048]',
        'price'=> 'required|numeric',
        'description'=> 'required|string',
        'category_id'=> 'required|numeric'
      ]);
      if($validation) {
        $image = $this->request->getFile('image');
        $imgPath = null;
        if($image && $image->isValid()){
          $imgName = $image->getRandomName();

          $image->move(ROOTPATH.'public/uploads', $imgName);
          $imgPath = 'uploads/'.$imgName;
        }
        $productData=[
          'name'=> $this->request->getPost('name'),
          'image'=> $imgPath,
          'price'=> $this->request->getPost('price'),
          'description'=> $this->request->getPost('description'),
          'category_id'=> $this->request->getPost('category_id')
        ];
        $this->dbProduct->createProduct($productData);
        return view('control/create-product',['categories'=> $categories, 'success'=>'Product created successfully']);

      }
        return view('control/create-product', ['errors'=> $this->validator->getErrors(), 'categories'=> $categories]);
      
}
public function editProduct($id)
{
    $product = $this->dbProduct->get_product_by_id($id);
    
   
    return view('control/edit-product', ['product' => $product, 'categories' => $this->dbCate->getAllCate()]);
}

public function updateProduct($id)
{
$product = $this->dbProduct->get_product_by_id($id);
$categories = $this->dbCate->getAllCate();

  $validation = $this->validate([
    'name' => 'permit_empty|string',
    'image' => 'permit_empty|uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/png]|max_size[image,2048]',
    'category' => 'permit_empty|string',
    'price' => 'permit_empty|numeric'
]);
if ($validation) {
    $data = [];
    if ($this->request->getPost('name')) {
        $data['name'] = $this->request->getPost('name');
    }
    if ($this->request->getPost('price')) {
        $data['price'] = $this->request->getPost('price');
    }
    if ($this->request->getPost('category')) {
        $data['category'] = $this->request->getPost('category');
    }
    $image = $this->request->getFile('image');
    if ($image && $image->isValid() && !$image->hasMoved()) {
        $newName = $image->getRandomName();
        $image->move(ROOTPATH . 'public/uploads', $newName);
        $data['image'] = 'uploads/' . $newName;
    }

    if (!empty($data)) {
        $this->dbProduct->updateProduct($id, $data);
        return view('control/edit-product', ['success' => 'Product updated successfully','product' => $product[0], 'categories' => $categories]);
    } 
        return view('control/edit-product', ['dbError' => 'No data to update','product' => $product[0], 'categories' => $categories]);
    
}

return view('control/edit-product', ['errors' => $this->validator->getErrors(), 'product' => $product[0], 'categories' => $categories]);
}

    public function deleteProduct($id)
    {
      $this->dbProduct->deleteProduct($id);
      return redirect()->to(base_url('control'));
    }
}
