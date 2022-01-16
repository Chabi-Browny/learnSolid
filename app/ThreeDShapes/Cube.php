<?php

namespace App\ThreeDShapes;

use App\Contracts\ManageShapeInterface;
use App\Contracts\SolidShapeInterface;
/**
 * Description of Cube
 */
class Cube implements SolidShapeInterface, ManageShapeInterface{
    
    protected $length;
    
    public function __construct($length) 
    {
        $this->length = $length;
    }
    
    public function area()
    {
        return 6 * pow ( $this->length, 2 );
    }
    
    public function volume()
    {
        return pow( $this->length, 3 );
    }
    
    public function calculate()
    {
        return $this->area();
    }
    
}
