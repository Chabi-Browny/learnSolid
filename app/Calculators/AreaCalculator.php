<?php

namespace App\Calculators;

use App\Calculators\Prototype\AbstractCalculator;
use App\Contracts\ManageShapeInterface;
use App\Exceptions\AreaCalclulatorInvalidException;

/**
 * Description of AreaCalculator
 */
class AreaCalculator extends AbstractCalculator{
    
    protected $shapes;
    
    public function __construct($shapes = []) 
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {
        foreach( $this->shapes as $shape )
        {
            if ( $shape instanceof ManageShapeInterface )
            {
                $area[] = $shape->calculate();
                continue;
            }
            
            throw new AreaCalclulatorInvalidException();
        }
        
        return array_sum($area);
    }
    
}
