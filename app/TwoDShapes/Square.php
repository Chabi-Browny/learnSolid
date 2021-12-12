<?php
namespace App\TwoDShapes;

/**
 * Description of Square
 */
class Square {
    
    protected $length;
    
    public function __construct($length) 
    {
        $this->length = $length;
    }
    
    public function getLength()
    {
        return $this->length;
    }

}
