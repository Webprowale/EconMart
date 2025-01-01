<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table            = 'products';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id',
        'name',
        'image',
        'description',
        'price',
        'category_id',
       
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function createProduct(array $data)
    {
        return $this->insert($data);
    }
   
   public function get_products()
   {
       $this->select('products.*, categories.name as category_name');
         $this->join('categories', 'categories.id = products.category_id');
            return $this->findAll();
   }
   public function get_product_by_id($id)
   {
         $this->select('products.*, categories.name as category_name');
            $this->join('categories', 'categories.id = products.category_id');
                return $this->find($id);
   }
   public function get_product_by_category($category_id)
   {
            $this->select('products.*, categories.name as category_name');
                $this->join('categories', 'categories.id = products.category_id');
                    return $this->where('category_id', $category_id)->findAll();
   }
    public function countProduct()
    {
        return $this->countAllResults();
    }
    public function updateProduct($id, array $data)
    {
        return $this->update($id, $data);
    }
    public function deleteProduct($id)
    {
        return $this->delete($id);
    }
}