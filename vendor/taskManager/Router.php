<?php

namespace taskManager;

class Router
{
    protected $routes = array();
    protected $route = array();

    public function addRoute($regexp, $route = [])
    {
        $this->routes[$regexp] = $route;
    }

    public function getRoutes()
    {
        return $this->routes;
    }

    public function getRoute()
    {
        return $this->route;
    }

    public function dispatch($queryStringOfUrl)
    {
        $address = empty($queryStringOfUrl['addr']) ? '' : $queryStringOfUrl['addr'];
        if ($this->matchRoute($address)) {
            $controller = 'app\controllers\\' . $this->route['controller'] . 'Controller';

            if (class_exists($controller)) {
                /** @var Controller $controllerObject */
                $controllerObject = new $controller($this->route);
                $controllerObject->getModel();

                $action = $this->route['action'] . 'Action';
                if (method_exists($controllerObject, $action)) {
                    $controllerObject->$action();
                    $controllerObject->getView();
                    return true;
                }
            }
        }
        echo 'Routing error!';
    }

    protected function matchRoute($address)
    {
        foreach ($this->routes as $pattern => $route) {
            if (preg_match("#{$pattern}#", $address, $matches)) {
                foreach ($matches as $key => $value) {
                    if (is_string($key)) $route[$key] = $value;
                }
                if (empty($route['action'])) {
                    $route['action'] = 'index';
                }
                $this->route['controller'] = $this->upperCamelCase($route['controller']);
                $this->route['action'] = $this->lowerCamelCase($route['action']);
                return true;
            }
        }
        return false;
    }

    protected function upperCamelCase($name)
    {
        $name = str_replace('-', ' ', $name);
        $name = ucwords($name);
        $name = str_replace(' ', '', $name);
        return $name;
    }

    protected function lowerCamelCase($name)
    {
        return lcfirst(self::upperCamelCase($name));
    }
}