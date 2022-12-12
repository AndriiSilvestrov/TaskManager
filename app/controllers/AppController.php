<?php

namespace app\controllers;

use taskManager\Controller;

class AppController extends Controller
{
    public function __construct($routeData)
    {
        parent::__construct($routeData);

        $this->addFile('css', ASSETS . '/css/_reset.css');
        $this->addFile('css', ASSETS . '/css/_main.css');
        $this->addFile('css', ASSETS . '/css/common.css');
        $this->addFile('css', ASSETS . '/css/notifications.css');
        $this->addFile('css', ASSETS . '/css/modal.css');

        $this->addFile('js', ASSETS . '/js/modal.js');
    }
}