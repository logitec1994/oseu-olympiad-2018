<?php

include_once "application/config/DataBase.php";

class CModelBase
{
    protected $link = null;

    function __construct()
    {
        $this->link = new mysqli(
            ENGINE_DATABASE_HOST,
            ENGINE_DATABASE_LOGIN,
            ENGINE_DATABASE_PASSWORD,
            ENGINE_DATABASE_NAME
        );

        if ($this->link->connect_errno)
        {
            throw new Exception("Model connection error: {$this->link->connect_error}");
        }

        if (!$this->link->set_charset("utf8"))
        {
            throw new Exception("Model can't set encoding: {$this->link->error}");
        }
    }

    function __destruct()
    {
        $this->link->close();
        $this->link = null;
    }

    public function escape($s)
    {
        return $this->link->real_escape_string(trim(htmlspecialchars(trim($s))));
    }
}
