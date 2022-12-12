<?php

namespace app\controllers;

use taskManager\App;

class InboxController extends AppController
{
    public function indexAction()
    {
        $debug = [
            'dbLink' => $this->modelObject->dbLink,
            'route' => $this->routeData,
            'storage' => App::$storage->getProperties(),
        ];
        $this->setData(compact('debug'));
//        $this->setData(['dbLink' => $dbLink]);
    }
}