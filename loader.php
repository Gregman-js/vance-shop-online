<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//var_dump($_SERVER);
//die();

spl_autoload_register(function ($class_name) {
    $class_name = str_replace('App', 'src', str_replace('\\', '/', $class_name));
    include $class_name . '.php';
});