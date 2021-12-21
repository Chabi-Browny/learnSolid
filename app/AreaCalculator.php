<?php
namespace App;

use \App\Contracts\ShapeInterface;
use \App\Exceptions\AreaCalclulatorInvalidException;

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
            if ( $shape instanceof ShapeInterface )
            {
                $area[] = $shape->area();
                continue;
            }
            
            throw new AreaCalclulatorInvalidException();
        }
        
        return array_sum($area);
    }
    
}
