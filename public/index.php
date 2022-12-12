<?php

use \taskManager\App;

require_once dirname(__DIR__) . '/config/init.php';

$_SESSION['test'] = 'Hello';
$_SESSION['test2'] = 'World';

new App();