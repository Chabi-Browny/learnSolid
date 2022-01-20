<?php

namespace App\ThreeDShapes;

use App\Contracts\SolidShapeInterface;
use App\Contracts\ManageRendererInterface;
/**
 * Description of Shapre
 */
class Sphere implements SolidShapeInterface, ManageRendererInterface{
    
    protected $radius;
    
    public function __construct($radius) 
    {
        $this->radius = $radius;
    }
    
    public function area()
    {
        return 4 * pi() * pow( $this->radius, 2 );
    }

    public function volume() 
    {
        return (4/3) * pi() * pow( $this->radius, 3);
    }
    
    public function calculate()
    {
        return $this->area();
    }
    
    public function renderPrepare()
    {
        return "simple_sphere";
    }

}
