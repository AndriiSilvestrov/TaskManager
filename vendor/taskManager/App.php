<?php

namespace taskManager;

class App
{
    public static $storage;
    public static $router;

    public function __construct()
    {
        self::$storage = Registry::getInstance();
        $this->getParams(self::$storage);

        self::$router = new Router();
        $this->addRoutes(self::$router);
        self::$router->dispatch($_GET);
    }

    protected function getParams($storageObject)
    {
        $file = TM_CONFIG . '/baseProperties.php';
        $params = file_exists($file) ? require_once $file : null;
        if (is_array($params) && !empty($params)) {
            foreach ($params as $name => $value) {
                $value = $value ?: null;
                $storageObject->setProperty($name, $value);
            }
        }
    }

    protected function addRoutes($routerObject)
    {
        $file = TM_CONFIG . '/routes.php';
        $routes = file_exists($file) ? require_once $file : null;
        if (is_array($routes) && !empty($routes)) {
            foreach ($routes as $regexp => $roure) {
                $routerObject->addRoute($regexp, $roure);
            }
        }
    }
}