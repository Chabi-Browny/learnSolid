<?php
namespace App\TwoDShapes;

/**
 * Description of Circle
 */
class Circle {
    
    protected $radius;
    
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }
    
}
