<?php

include_once 'application/core/CControllerBase.php';
include_once 'application/core/CRouter.php';
include_once 'application/models/CSettingsModel.php';
include_once 'application/core/TViewBase.php';

class CSettings extends CControllerBase
{
    use TViewBase;
    private $model = null;

    function __construct($page)
    {
        $this->model = new CSettingsModel();
    }

    public function get($args)
    {
        $this->render("settings");
    }

    public function post($args)
    {
    }
}
