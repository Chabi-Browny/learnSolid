<?php

namespace App\ThreeDShapes;

use App\Contracts\SolidShapeInterface;
/**
 * Description of Shapre
 */
class Shapre implements SolidShapeInterface{
    
    protected $radius;
    
    public function __construct($radius) 
    {
        $this->radius = $radius;
    }

    public function volume() 
    {
        return (4/3) * pi() * pow( $this->radius, 3);
    }

}
