<?php
namespace App\Calculators\Prototype;

/**
 * Description of AbstractCalculator
 */
abstract class AbstractCalculator {
    
    protected $shape;
    
    public function __construct(){}
    
    abstract public function sum();
    
}
