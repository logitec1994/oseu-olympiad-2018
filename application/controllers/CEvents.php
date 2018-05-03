<?php

include_once 'application/core/CControllerBase.php';
include_once 'application/core/TViewBase.php';


class CEvents extends CControllerBase
{
    use TViewBase;

    function __construct($page)
    {
    }

    function __destruct()
    {
    }

    public function get($args)
    {
        $this->render("events");
    }

    public function post($args)
    {
    }
}
