<?php

//echo dirname(__FILE__);

//function autoloader($class) {
////    echo ($class);
//    $class = str_replace("\\", '/', $class);
//    $file = TM_ROOT . "/{$class}.php";
//    if (file_exists($file)) {
//        require_once $file;
//    } else {
//        echo 'file not found';
//    }
//}
//
//spl_autoload_register('autoloader');

require_once TM_ROOT . '/vendor/taskManager/NamespaceAutoloader.php';
$autoloader = new NamespaceAutoloader();
$autoloader->addNamespace('app', TM_ROOT . '/app');
$autoloader->addNamespace('taskManager', TM_ROOT . '/vendor/taskManager');
$autoloader->register();

/* https://victor.4devs.io/ru/php/classes-autoload-php.html */