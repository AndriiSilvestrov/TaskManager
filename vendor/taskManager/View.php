<?php

namespace taskManager;

class View
{
    public $routeData = array();
    public $layout = '';
    public $view = '';
    public $additionalFiles = array();
    public $content = '';

    public function __construct($routeData, $layout, $view, $additionalFiles)
    {
        $this->routeData = $routeData;
        $this->layout = $layout;
        $this->view = $view;
        $this->additionalFiles = $additionalFiles;

        if ($this->layout !== false) {
            $this->layout = $this->layout ?: LAYOUT;
        }
    }

    public function render($data)
    {
        if (is_array($data)) extract($data);
        $viewFile = APP . "/views/{$this->routeData['controller']}/{$this->view}.php";
        if (is_file($viewFile)) {
            ob_start();
            require_once $viewFile;
            $this->content = ob_get_clean();
        }

        if ($this->layout !== false) {
            $layoutFile = APP . "/views/_layouts/{$this->layout}.php";
            if (is_file($layoutFile)) {
                require_once $layoutFile;
            }
        }
    }

    public function getFiles($type)
    {
        $fileList = array();
        $blank = '';
        $html = '';
        switch ($type) {
            case 'css':
                $blank = '<link rel="stylesheet" href="%s">';
                break;
            case 'js':
                $blank = '<script src="%s"></script>';
                break;
            default:
                return false;
        }
        if (!empty($this->additionalFiles[$type])) {
            $fileList = $this->additionalFiles[$type];
        }
        foreach ($fileList as $path) {
            $html .= sprintf($blank, $path);
        }
        return $html . PHP_EOL;
    }
}