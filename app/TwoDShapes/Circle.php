<?php
namespace App\TwoDShapes;

use App\Contracts\ManageShapeInterface;
use App\Contracts\ShapeInterface;
/**
 * Description of Circle
 */
class Circle implements ShapeInterface, ManageShapeInterface{
    
    protected $radius;
    
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    
    public function area()
    {
        return pi() * pow( $this->radius, 2);
    }
    
    public function calculate()
    {
        return $this->area();
    }
    
}
