<?php

include_once 'application/core/CModelBase.php';

class CRegistrationModel extends CModelBase
{

    public function __construct()
    {
        parent::__construct();
    }

    public function checkMailExists($email)
    {
        $ret = $this->link->query("SELECT id FROM users WHERE email = '$email' LIMIT 1;");
        return $ret && ($ret->num_rows == 1);
    }

    public function register($firstName, $lastName, $patronymic, $email, $password)
    {
        $passwordHash = sha1(sprintf("%s:%s", $email, $password));

        $ret = $this->link->query(
            "INSERT INTO users (firstname, lastname, patronymic, email, password)
                    VALUES ('$firstName', '$lastName', '$patronymic', '$email', '$passwordHash')");

        return $ret && ($this->link->affected_rows == 1);
    }
}
