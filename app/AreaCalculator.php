<?php
namespace App;

use App\TwoDShapes\Circle;
use App\TwoDShapes\Square;

/**
 * Description of AreaCalculator
 */
class AreaCalculator {
    
    protected $shapes;
    
    public function __construct($shapes = []) 
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {
        foreach( $this->shapes as $shape )
        {
            if ($shape instanceof Circle)
            {
                $area[] = pi() * pow($shape->getRadius(), 2);
            }
            else if ($shape instanceof Square)
            {
                $area[] = pow($shape->getLength(), 2);
            }
        }
        
        return array_sum($area);
    }
    
}
