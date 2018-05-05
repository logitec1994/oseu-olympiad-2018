<?php

include_once 'application/core/CControllerBase.php';
include_once 'application/core/TViewBase.php';


class CFooter extends CControllerBase
{
    use TViewBase;

    function __construct($page)
    {
    }

    public function get($args)
    {
        $this->render("footer");
    }

    public function post($args)
    {
    }
}
