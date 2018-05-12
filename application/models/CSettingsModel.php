<?php

include_once 'application/config/Session.php';
include_once 'application/core/CModelBase.php';
include_once 'application/models/TUserApi.php';


class CSettingsModel extends CModelBase
{
    use TUserApi;

    public function __construct()
    {
        parent::__construct();
    }

    public function checkMailExists($email, $me)
    {
        $ret = $this->link->query("SELECT id FROM users WHERE id != $me AND email = '$email' LIMIT 1;");
        return $ret && ($ret->num_rows == 1);
    }

    public function update($uiid, $firstName, $lastName, $patronymic, $email, $password, $birthDate)
    {
        $passwordHash = sha1(sprintf("%s:%s", $email, $password));


        $ret = $this->link->query("UPDATE users SET
              `firstname` = '$firstName'
            , `lastname` = '$lastName'
            , `email` = '$email'
            , `patronymic` = '$patronymic'
            , `password` = '$passwordHash'
            , `birthdate` = '$birthDate'
        WHERE `id` = $uiid;");

        return !!$ret;
    }
}
