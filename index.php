<?php 
declare (strict_types = 1);

ini_set('display_errors','1');
error_reporting(E_ALL);

defined('DS') OR define('DS', DIRECTORY_SEPARATOR);

require_once('system'.DS.'autoload.php');

use App\TwoDShapes\Circle;

try
{

$cricel = new Circle(1);
    
}
catch(\Exception $error)
{
    print_r($error->getMessage());
}