<?php 

namespace App\TestOneBundle\Models;

use App\TestOneBundle\Interfaces\ManagerInterface;

/**
 * User Class
 * 
 * @author Andras
 *
 */
class User extends ModelBase implements ManagerInterface {
    
    protected $email;
    protected $firstName;
    protected $lastName;
    
    /**
     * Constructor
     * 
     * @param unknown $email
     * @param unknown $firstName
     * @param unknown $lastName
     */
    public function __construct($email = null, $firstName = null, $lastName = null) {
        parent::__construct('customer');
        $this->email = $email ?? null;
        $this->firstName = $firstName ?? null;
        $this->lastName = $lastName ?? null;
    }
    
    /**
     * Retursn an array of 10 items
     *
     * @return array
     */
    public static function findAll() : array {
        $result = [];
        for($i = 0; $i < 10; $i++) {
            $result[$i] = (new User('fakeemail' . $i . '@ggg.com', 'FN' . $i, 'LN ' . $i)).toArray();
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
     * @return the $firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return the $lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param field_type $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param field_type $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @param field_type $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    
}