<?php

include_once 'application/core/CControllerBase.php';
include_once 'application/models/CLoginModel.php';
include_once 'application/core/CRouter.php';
include_once 'application/config/Session.php';


class CLogin extends CControllerBase
{
    private $model = null;

    function __construct($page)
    {
        $this->model = new CLoginModel();
    }

    function __destruct()
    {
        $this->model = null;
    }

    static private function makeCookie($email, $password)
    {
        return sha1(sprintf("%s:%s:%s", $email, $password, time()));
    }

    public function post($args)
    {
        $submit = $this->model->escape($_POST["login"]);
        $email = $this->model->escape($_POST['email']);
        $password = $this->model->escape($_POST['password']);

        $items = array($submit, $email, $password);

        $filtred = array_filter($items, function ($item) {
            return empty($item);
        });

        $message = "ok,login";
        $redirectTo = "/";

        if (!$filtred)
        {
            $cookie = CLogin::makeCookie($email, $password);
            if ($this->model->login($email, $password, $cookie))
            {
                setcookie(ENGINE_SESSION_COOKIE_ID, $cookie);
            }
            else
            {
                $message = "error,login";
                $redirectTo = "/authorization";
            }
        }
        else
        {
            $message = "error,fields";
            $redirectTo = "/authorization";
        }

        setcookie("msg", $message);
        CRouter::redirect($redirectTo);
    }
}
