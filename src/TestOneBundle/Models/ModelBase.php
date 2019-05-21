<?php 

namespace App\TestOneBundle\Models;

/**
 * ModelBase Class
 * 
 * @author Andras
 *
 */
class ModelBase {
    
    public static $url;
    protected const URLBASE = 'http://example.com/';
    
    /**
     * Constructor
     * 
     * @param unknown $urlName
     */
    public function __construct($urlName) {
        self::$url = self::URLBASE . $urlName;
    }

    /**
     * @return the $url
     */
    public function getUrl()
    {
        return self::$url;
    }

    /**
     * @param field_type $url
     */
    public function setUrl($url)
    {
        self::$url = $url;
    }
    
    /**
     * Magic getter for handling properties created during the running
     * 
     * @param unknown $name
     * @throws \Exception
     * @return unknown
     */
    public function __get($name) {
        if(property_exists($this, $name)) {
            return $this->name;
        } else {
            throw new \Exception('Undefined property!');
        }
    }
    
    /**
     * Magic setter to create runtime properties
     * 
     * @param unknown $name
     * @param unknown $value
     */
    public function __set($name, $value) {
        $this->name = $value;
    }
    
    /**
     * Returns as an array
     * 
     * @return array
     */
    public function toArray() {
        return (array)$this;
    }
}