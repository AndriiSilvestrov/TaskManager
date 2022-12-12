<?php

namespace taskManager;

trait TSingleton
{
    private static $instance;

    private function __construct() {}

    public static function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }
        return static::$instance;
    }
}