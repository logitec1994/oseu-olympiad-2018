<?php


trait TUserApi
{
    public function getUserByCookie($cookie)
    {
        $cookie = $this->escape($cookie);
        $ret = $this->link->query("
            SELECT
              u.*, s.cookie
            FROM users AS u
              JOIN sessions AS s
              ON s.uiid = u.id
            WHERE cookie = '$cookie' LIMIT 1;");

        return ($ret && ($ret->num_rows == 1)) ? $ret->fetch_object() : null;
    }

    public function isAuthorized($cookie)
    {
        return !!$this->getUserByCookie($cookie);
    }

    public function getUserByAuthentication($email, $password) {
        $passwordHash = sha1(sprintf("%s:%s", $email, $password));

        $ret = $this->link->query("SELECT * FROM users WHERE password = '{$passwordHash}' LIMIT 1;");
        return ($ret && ($ret->num_rows == 1)) ? $ret->fetch_object() : null;
    }
}
