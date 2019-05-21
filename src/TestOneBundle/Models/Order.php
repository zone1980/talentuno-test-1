<?php 

namespace App\TestOneBundle\Models;

use App\TestOneBundle\Interfaces\ManagerInterface;

/**
 * Order Class
 * 
 * @author Andras
 *
 */
class Order extends ModelBase implements ManagerInterface {
    
    protected $orderId;
    protected $email;
    protected $items = [];
    
    /**
     * Constructor
     * 
     * @param unknown $orderId
     * @param unknown $email
     * @param array $items
     */
    public function __construct($orderId = null, $email = null, $items = []) {
        parent::__construct('order');
        $this->orderId = $orderId ?? null;
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
            $result[$i] = (new Order($i, 'fakeemail' . $i . '@ggg.com', [])).toArray();
        }
        
        return $result;
    }
    
    /**
     * @return the $orderId
     */
    public function getOrderId()
    {
        return $this->orderId;
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
     * @param Ambigous <NULL, string> $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @param Ambigous <NULL, string> $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param Ambigous <multitype:, unknown> $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }
}