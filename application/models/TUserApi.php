<?php


trait TUserApi
{
    public function getUserByCookie($cookie)
    {
    }

    public function getUserByAuthentication($email, $password) {
        $passwordHash = sha1(sprintf("%s:%s", $email, $password));

        $ret = $this->link->query("SELECT * FROM users WHERE password = '{$passwordHash}' LIMIT 1");
        return ($ret && ($ret->num_rows == 1)) ? $ret->fetch_object() : null;
    }
}
