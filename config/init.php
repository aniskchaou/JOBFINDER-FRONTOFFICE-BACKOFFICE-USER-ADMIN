<?php
//config
require_once 'config.php';

//load template

spl_autoload_register(function($class) {
    require_once ('lib/'.$class.'.php');
    });

?>