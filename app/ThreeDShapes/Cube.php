<?php

namespace App\ThreeDShapes;

use App\Contracts\SolidShapeInterface;
/**
 * Description of Cube
 */
class Cube implements SolidShapeInterface{
    
    protected $length;
    
    public function __construct($length) 
    {
        $this->length = $length;
    }
    
    public function volume()
    {
        return pow( $this->length, 3);
    }
    
}
