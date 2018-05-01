<?php

include_once 'application/core/CControllerBase.php';
include_once 'application/models/CRegistrationModel.php';
include_once 'application/core/CRouter.php';


class CRegistration extends CControllerBase
{
    private $model = null;

    function __construct($page)
    {
        $this->model = new CRegistrationModel();
    }

    function __destruct()
    {
        $this->model = null;
    }

    public function post($args)
    {
        $submit = $this->model->escape($_POST["registration"]);
        $email = $this->model->escape($_POST['email']);
        $firstName = $this->model->escape($_POST['firstname']);
        $lastName = $this->model->escape($_POST['lastname']);
        $patronymic = $this->model->escape($_POST['patronymic']);
        $password = $this->model->escape($_POST['password']);
        $rePassword = $this->model->escape($_POST['re-password']);

        $items = array($submit, $email, $firstName, $lastName, $patronymic, $password, $rePassword);

        $filtred = array_filter($items, function ($item) {
            return empty($item);
        });

        $message = "ok,registration";

        if (!$filtred)
        {
            if (!$this->model->checkMailExists($email))
            {
                if(!$this->model->register($firstName, $lastName, $patronymic, $email, $password))
                {
                    $message = "error,registration";
                }
            }
            else
            {
                $message = "error,exists";
            }
        }
        else
        {
            $message = "error,fields";
        }

        setcookie("msg", $message);
        CRouter::redirect('/authorization');
    }
}
