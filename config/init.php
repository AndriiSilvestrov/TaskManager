<?php

session_start();

define('DEBUG', true);
define('TM_ROOT', dirname(__DIR__));
define('TM_CONFIG', TM_ROOT . '/config');
define('APP', TM_ROOT . '/app');
define('WWW', TM_ROOT . '/public');
define('CORE', TM_ROOT . '/vendor/taskManager');
define('HELPERS', CORE . '/helpers');

define('LAYOUT', 'tm_full');
define('PATH', 'http://localhost:8888/__mvcTaskManager');
define('ASSETS', 'public');

require_once TM_ROOT . '/vendor/autoload.php';
require_once HELPERS . '/functions.php';

