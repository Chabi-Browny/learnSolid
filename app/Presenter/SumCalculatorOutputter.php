<?php

namespace App\Presenter;

use App\Calculators\Prototype\AbstractCalculator;
/**
 * Description of SumCalculatorOutputter
 * 
 */
class SumCalculatorOutputter {
    
    protected $calculator;
    
    public function __construct( AbstractCalculator $calculator) 
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
