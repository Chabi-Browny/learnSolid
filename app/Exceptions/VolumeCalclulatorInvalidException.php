<?php
namespace App\Exceptions;

/**
 * Description of AreaCalclulatorInvalidException
 */
class VolumeCalclulatorInvalidException extends \Exception {
    
    public function __construct() 
    {
        parent::__construct('The method is not valid volume()');
    }

}
