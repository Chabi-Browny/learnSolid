<?php 
declare (strict_types = 1);

ini_set('display_errors','1');
error_reporting(E_ALL);

defined('DS') OR define('DS', DIRECTORY_SEPARATOR);

require_once('system'.DS.'autoload.php');

use App\TwoDShapes\Circle;
use App\TwoDShapes\Square;
use App\AreaCalculator;
use App\SumCalculatorOutputter;

try
{

$shapes = [
    new Circle(1),
    new Square(3)
];

$areas = new AreaCalculator($shapes);
$outputer = new SumCalculatorOutputter($areas);
print_r($outputer->JSONOutput());
echo '<br>';
print_r($outputer->HTMLOutput());
    
}
catch(\Exception $error)
{
    print_r($error->getMessage());
}