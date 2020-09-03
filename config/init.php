<?php
//config
require_once 'config.php';

//session
session_start();

//load template
spl_autoload_register(function($class) {
    include $class.'.php';
    });

?>
