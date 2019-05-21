<?php 

namespace App\TestOneBundle\Models;

use App\TestOneBundle\Interfaces\ManagerInterface;

/**
 * Product Class
 * 
 * @author Andras
 *
 */
class Product extends ModelBase implements ManagerInterface {
    
    protected $productId;
    protected $price;
    protected $description;
    
    /**
     * Constructor
     * 
     * @param unknown $id
     * @param unknown $price
     * @param unknown $description
     */
    public function __construct($id = null, $price = null, $description = null) {
        parent::__construct('product');
        $this->productId = $id ?? null;
        $this->price = $price ?? null;
        $this->description = $description ?? null;
    }
    
    /**
     * Retursn an array of 10 items
     *
     * @return array
     */
    public static function findAll() : array {
        $result = [];
        for($i = 0; $i < 10; $i++) {
            $result[$i] = (new Product($i, rand(1000, 10000), 'Product ' . $i)).toArray();
        }
        
        return $result;
    }
    
    /**
     * @return the $productid
     */
    public function getProductId()
    {
        return $this->productId;
    }
    
    /**
     * @return the $price
     */
    public function getPrice()
    {
        return $this->price;
    }
    
    /**
     * @return the $description
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * @param field_type $productid
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }
    
    /**
     * @param field_type $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
    
    /**
     * @param field_type $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
}