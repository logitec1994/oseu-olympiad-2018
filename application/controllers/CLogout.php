<?php

include_once 'application/core/CControllerBase.php';
include_once 'application/models/CLogoutModel.php';
include_once 'application/core/CRouter.php';
include_once 'application/config/Session.php';


class CLogout extends CControllerBase
{
    private $model = null;

    function __construct($page)
    {
        $this->model = new CLogoutModel();
    }

    public function get($args)
    {
        $cookie = $_COOKIE[ENGINE_SESSION_COOKIE_ID];

        if (!empty($cookie))
        {
            $this->model->logout($cookie);
        }

        CRouter::redirect('/');
    }
}
