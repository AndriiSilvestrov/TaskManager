<?php

namespace taskManager;

abstract class Controller
{
    public $routeData = array();
    public $layout = '';
    public $view = '';
    public $modelObject;
    public $data = array();
    public $additionalFiles = array();

    public function __construct($routeData)
    {
        $this->routeData = $routeData;
    }

    public function getView()
    {
        $this->view = $this->view ?: $this->routeData['action'];
        $viewObject = new View($this->routeData, $this->layout, $this->view, $this->additionalFiles);
        $viewObject->render($this->data);
    }

    public function getModel()
    {
        $model = 'app\models\\' . $this->routeData['controller'] . 'Model';
        if (class_exists($model)) $this->modelObject = new $model();
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function addFile($type, $path)
    {
        $this->additionalFiles[$type][] = $path;
    }
}