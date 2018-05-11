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

    public function isUserHasRole($uiid, $role)
    {
        $ret = $this->link->query("SELECT a.* FROM access AS a
              JOIN users AS u ON a.uiid = u.id
              JOIN roles AS r ON a.riid = r.id
            WHERE u.id = $uiid AND r.role = '$role' LIMIT 1;");

        return $ret && ($ret->num_rows == 1);
    }
}
