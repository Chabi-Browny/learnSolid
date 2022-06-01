<?php

namespace App\ThreeDShapes;

use App\Contracts\ManageShapeInterface;
use App\Contracts\SolidShapeInterface;
use App\Contracts\ManageRendererInterface;
/**
 * Description of Cube
 */
class Cube implements SolidShapeInterface, ManageShapeInterface, ManageRendererInterface{
    
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
    
    public function renderPrepare()
    {
        return "simple_cube";
    }
    
}
