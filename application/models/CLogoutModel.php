<?php

include_once 'application/config/Session.php';
include_once 'application/core/CModelBase.php';


class CLogoutModel extends CModelBase
{
    public function __construct()
    {
        parent::__construct();
    }

    public function logout($cookie)
    {
        $this->removeSession($this->escape($cookie));
    }

    public function removeSession($cookie)
    {
        $ret = $this->link->query(
            "DELETE FROM sessions WHERE cookie = '$cookie' LIMIT 1;"
        );

        setcookie (ENGINE_SESSION_COOKIE_ID, '', time() - 3600);
        return $ret && ($this->link->affected_rows == 1);
    }
}
