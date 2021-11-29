<?php

function loadApp($cls)
{
    $pathCorrection = strtr(lcfirst($cls), '/\\', DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR);
    
    if (file_exists(dirname(__DIR__).DIRECTORY_SEPARATOR.$pathCorrection.'.php') )
    {
        include_once dirname(__DIR__).DIRECTORY_SEPARATOR.$pathCorrection.'.php';
    }
}

spl_autoload_register('loadApp');
