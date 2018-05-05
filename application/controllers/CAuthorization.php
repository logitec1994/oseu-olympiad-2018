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
        $cookie = self::getCookie(ENGINE_SESSION_COOKIE_ID);

        if (!!$cookie && $this->model->getUserByCookie($cookie))
        {
            CRouter::redirect("/");
        }
        else
        {
            $this->render("authorization");
        }
    }
}
