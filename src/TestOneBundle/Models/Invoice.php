<?php 

namespace App\TestOneBundle\Models;

use App\TestOneBundle\Interfaces\ManagerInterface;

/**
 * Invoice Class
 * 
 * @author Andras
 *
 */
class Invoice extends ModelBase implements ManagerInterface {
    
    protected $orderId;
    protected $email;
    protected $description;
    
    /**
     * Constructor
     * 
     * @param unknown $orderId
     * @param unknown $email
     * @param unknown $description
     */
    public function __construct($orderId = null, $email = null, $description = null) {
        parent::__construct('invoice');
        $this->orderId = $orderId ?? null;
        $this->email = $email ?? null;
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
            $result[$i] = (new Invoice($i, rand(1000, 10000), 'Invoice ' . $i)).toArray();
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
     * @return the $description
     */
    public function getDescription()
    {
        return $this->description;
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
     * @param Ambigous <NULL, string> $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

}