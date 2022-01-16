<?php 

declare (strict_types = 1);

ini_set('display_errors','1');
error_reporting(E_ALL);

defined('DS') OR define('DS', DIRECTORY_SEPARATOR);

require_once('system'.DS.'autoload.php');

use App\TwoDShapes\Circle;
use App\TwoDShapes\Square;
use App\ThreeDShapes\Cube;
use App\ThreeDShapes\Shapre;

use App\Calculators\AreaCalculator;
use App\Calculators\VolumeCalculator;
use App\SumCalculatorOutputter;

try
{

$shapes = [
    new Circle(1),
    new Square(3)
];

$solidShapes = [
    new Cube(2),
    new Shapre(5)
];

$areas = new AreaCalculator($shapes);
$volumes = new VolumeCalculator($solidShapes);

$outputer = new SumCalculatorOutputter($areas);
$volumeOutputer = new SumCalculatorOutputter($volumes);

echo 'areas: <br>';
print_r($outputer->JSONOutput());
echo '<br>';
print_r($outputer->HTMLOutput());
echo '<br> volumes: <br>';
print_r($volumeOutputer->JSONOutput());
echo '<br>';
print_r($volumeOutputer->HTMLOutput());
    
}
catch(\Exception $error)
{
    print_r($error->getMessage());
}