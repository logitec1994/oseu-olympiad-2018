<?php

include_once 'application/config/Session.php';
include_once 'application/core/CModelBase.php';
include_once 'application/models/TUserApi.php';


class CLoginModel extends CModelBase
{
    use TUserApi;

    public function __construct()
    {
        parent::__construct();
    }

    public function login($email, $password, $cookie)
    {
        $user = $this->getUserByAuthentication($email, $password);

        if (!$user)
        {
            return false;
        }

        return $this->createSession($user->id, $cookie);
    }

    public function createSession($uiid, $cookie) {
        $ret = $this->link->query(
            "INSERT INTO sessions (uiid, cookie)
              VALUE ($uiid, '$cookie')");

        return $ret && ($this->link->affected_rows == 1);
    }
}
