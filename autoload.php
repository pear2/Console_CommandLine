<?php

function autoload($class)
{
    $class = str_replace(array('\\', '_'), '/', $class);
    include $class . '.php';
}
    
spl_autoload_register("autoload");

set_include_path(dirname(__FILE__).'/src');
