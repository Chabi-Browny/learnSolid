<?php
namespace App\TwoDShapes;

use \App\Contracts\ShapeInterface;
/**
 * Description of Square
 */
class Square implements ShapeInterface{
    
    protected $length;
    
    public function __construct($length) 
    {
        $this->length = $length;
    }
    
    public function getLength()
    {
        return $this->length;
    }
    
    public function area()
    {
        return pow($this->getLength(), 2);
    }

}
