<?php
namespace App\TwoDShapes;

use App\Contracts\ShapeInterface;
use App\Contracts\ManageShapeInterface;
use App\Contracts\ManageRendererInterface;
/**
 * Description of Square
 */
class Square implements ShapeInterface, ManageShapeInterface, ManageRendererInterface{
    
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
    
    public function calculate()
    {
        return $this->area();
    }

    public function renderPrepare() 
    {
        return "simple_square";
    }

}
