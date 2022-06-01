<?php

namespace App\Calculators;

use App\Calculators\Prototype\AbstractCalculator;
use App\Contracts\SolidShapeInterface;
use App\Exceptions\VolumeCalclulatorInvalidException;
/**
 * Description of VolumeCalculator
 */
class VolumeCalculator extends AbstractCalculator{
    
    protected $shapes;
    
    public function __construct($solidShapes = [])
    {
        parent::__construct($solidShapes);
        $this->shapes = $solidShapes;
    }

    public function sum()
    {
        $summData = [];
        if( !empty($this->shapes) )
        {
            foreach( $this->shapes as $solidShape )
            {
                if( $solidShape instanceof SolidShapeInterface)
                {
                    $summData[] = $solidShape->volume();
                    continue;
                }
                
                throw new VolumeCalclulatorInvalidException();
            }
        }
        
        return array_sum($summData);
    }
    
}
