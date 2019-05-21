<?php 

namespace App\TestOneBundle\Models;

use App\TestOneBundle\Interfaces\ManagerInterface;

/**
 * Cart Class
 * 
 * @author Andras
 *
 */
class Cart extends ModelBase implements ManagerInterface {
    
    protected $email;
    protected $items = [];
    
    /**
     * Constuctor
     * 
     * @param unknown $email
     * @param array $items
     */
    public function __construct($email = null, $items = []) {
        parent::__construct('cart');
        $this->email = $email ?? null;
        $this->items = $items ?? [];
    }
    
    /**
     * Retursn an array of 10 items
     * 
     * @return array
     */
    public static function findAll() : array {
        $result = [];
        for($i = 0; $i < 10; $i++) {
            $result[$i] = (new Cart('fakeemail' . $i . '@ggg.com', [])).toArray();
        }
        
        return $result;
    }
    
    /**
     * @return the $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return the $items
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param field_type $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param field_type $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }

    
    
    
}