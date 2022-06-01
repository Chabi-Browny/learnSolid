<?php
namespace App\TwoDShapes;

use App\Contracts\ManageShapeInterface;
use App\Contracts\ShapeInterface;
use App\Contracts\ManageRendererInterface;
/**
 * Description of Circle
 */
class Circle implements ShapeInterface, ManageShapeInterface, ManageRendererInterface{
    
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

    public function renderPrepare()
    {
        return "simple_circle";
    }

}
