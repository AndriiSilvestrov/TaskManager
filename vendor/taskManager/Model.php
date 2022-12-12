<?php

namespace taskManager;

abstract class Model
{
    public $dbLink;
    public $attributes = array();
    public $errors = array();

    public function __construct()
    {
        DbConnection::getInstance();
        $this->dbLink = DbConnection::$link;
    }
}