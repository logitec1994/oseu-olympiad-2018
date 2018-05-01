<?php

include_once 'application/core/CControllerBase.php';
include_once 'application/core/TViewBase.php';
include_once 'application/core/CRouter.php';
include_once 'application/models/CAuthorizationModel.php';

class CAuthorization extends CControllerBase
{
    use TViewBase;

    private $model = null;

    public function __construct($page)
    {
        $this->model = new CAuthorizationModel();
    }

    public function get($args)
    {
        $cookie = $_COOKIE[ENGINE_SESSION_COOKIE_ID];

        if (!empty($cookie) && !$this->model->getUserByCookie($cookie))
        {
            $this->render("authorization");
        }
        else
        {
            CRouter::redirect("/");
        }
    }
}
