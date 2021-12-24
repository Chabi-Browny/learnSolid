<?php

namespace App\Calculators;

use App\Calculators\AreaCalculator;
use App\Contracts\SolidShapeInterface;
use App\Exceptions\VolumeCalclulatorInvalidException;
/**
 * Description of VolumeCalculator
 */
class VolumeCalculator extends AreaCalculator{
    
    protected $solidShapes;
    
    public function __construct($solidShapes = [])
    {
        parent::__construct($solidShapes);
        $this->solidShapes = $solidShapes;
    }

    public function sum()
    {
        $summData = [];
        if( !empty($this->solidShapes) )
        {
            foreach( $this->solidShapes as $sShape )
            {
                if( $sShape instanceof SolidShapeInterface)
                {
                    $summData[] = $sShape->volume();
                    continue;
                }
                
                throw new VolumeCalclulatorInvalidException();
            }
        }
        
        return array_sum($summData);
    }
    
}
