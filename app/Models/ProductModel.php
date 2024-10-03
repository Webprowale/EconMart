<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table            = 'product';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'name',
        'image',
        'price',
        'category_id',
        'created_at',
        'updated_at',
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function createProduct(array $data)
    {
        return $this->insert($data);
    }
    public function getAllProducts()
    {
        return $this->join('category', 'product.category_id = category.id')
        ->select('product.*, category.name AS category_name')
        ->get()
        ->getResultArray();
    }
    public function getProductById($id)
    {
        return $this->join('category', 'product.category_id = category.id')
        ->select('product.*, category.name AS category_name')
        ->where('product.id', $id)
        ->get()
        ->getResultArray();
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
