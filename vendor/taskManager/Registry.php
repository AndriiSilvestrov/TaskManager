<?php

namespace taskManager;

class Registry
{
    use TSingleton;

    protected static $storage = array();

    public function setProperty($name, $value)
    {
        self::$storage[$name] = $value;
    }

    public function getProperty($name)
    {
        return isset(self::$storage[$name]) ? self::$storage[$name] : null;
    }

    public function getProperties()
    {
        return self::$storage;
    }
}