<?php

namespace App;

use App\AreaCalculator;
/**
 * Description of SumCalculatorOutputter
 * 
 */
class SumCalculatorOutputter {
    
    protected $calculator;
    
    public function __construct( AreaCalculator $calculator) 
    {
        $this->calculator = $calculator;
    }
    
    public function JSONOutput()
    {
        $data = [
            'data' => $this->calculator->sum()
        ];
        return json_encode($data, JSON_UNESCAPED_UNICODE);
    }
    
    public function HTMLOutput()
    {
        return implode('',
        [
            '',
            'Result: ',
            $this->calculator->sum(),
            ''
        ]);
    }

}
