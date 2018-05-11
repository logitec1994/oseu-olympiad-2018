<?php

include_once 'application/core/CControllerBase.php';
include_once 'application/core/CRouter.php';
include_once 'application/models/CUsersModel.php';
include_once 'application/core/TViewBase.php';


class CUsers extends CControllerBase
{
    use TViewBase;
    private $model = null;

    function __construct($page)
    {
        $this->model = new CUsersModel();
    }

    public function get($args)
    {
        $user = $this->model->getUserByCookie(self::getCookie(ENGINE_SESSION_COOKIE_ID));

        if (!$user)
        {
            CRouter::errorPage403();
            return;
        }

        if (!$this->model->isUserHasRole($user->id, 'admin'))
        {
            CRouter::errorPage403();
            return;
        }

//        print '<pre>';
//        print_r($this->model->getUserList());
//        print '</pre>';
        $this->render("users", array('users' => $this->model->getUserList()));
    }

    public function post($args)
    {
    }
}
