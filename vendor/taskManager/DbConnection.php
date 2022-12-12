<?php

namespace taskManager;

class DbConnection
{
    use TSingleton;

    public static $link;

    private function __construct()
    {
        $dbConfig = require_once TM_CONFIG . '/dbConfig.php';
        $link = mysqli_connect($dbConfig['localhost'], $dbConfig['user'], $dbConfig['password'], $dbConfig['database']);
        if ($link) {
            static::$link = $link;
        } else {
            echo 'Database connect error!';
        }
    }
}