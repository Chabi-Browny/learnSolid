<?php
namespace App\TwoDShapes;

use \App\Contracts\ShapeInterface;
/**
 * Description of Circle
 */
class Circle implements ShapeInterface{
    
    protected $radius;
    
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }
    
    public function area()
    {
        return pi() * pow( $this->getRadius(), 2);
    }
    
}