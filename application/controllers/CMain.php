<?php

include_once 'application/core/CControllerBase.php';
include_once 'application/core/TViewBase.php';


class CMain extends CControllerBase
{
    use TViewBase;

    function __construct($page)
    {
    }

    public function get($args)
    {
        $this->render("main");
    }
}
