<?php

include_once 'application/core/CControllerBase.php';
include_once 'application/core/TViewBase.php';


class CAbout extends CControllerBase
{
    use TViewBase;

    public function __construct($page)
    {
    }

    public function get($args)
    {
        $this->render("about");
    }
}
