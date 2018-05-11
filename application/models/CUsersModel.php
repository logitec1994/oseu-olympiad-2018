<?php

include_once 'application/config/Session.php';
include_once 'application/core/CModelBase.php';
include_once 'application/models/TUserApi.php';


class CUsersModel extends CModelBase
{
    use TUserApi;

    public function __construct()
    {
        parent::__construct();
    }

    public function getUserList()
    {
        $users = $this->getUsers(100);
        foreach ($users as $key => $obj)
        {
            $users[$key]['roles'] = $this->getUserRoles($obj['id']);
        }

        return $users;
    }

    private function getUsers($limit)
    {
        $ret = $this->link->query("SELECT * FROM users LIMIT $limit;");
        return ($ret && ($ret->num_rows > 0)) ? $ret->fetch_all(MYSQLI_ASSOC) : null;
    }

    private function getUserRoles($uiid)
    {
        $ret = $this->link->query("
            SELECT
              r.id AS riid,
              r.role AS role
            FROM access AS a
              JOIN users AS u ON a.uiid = u.id
              JOIN roles AS r ON a.riid = r.id
            WHERE u.id = $uiid;");

        return ($ret && ($ret->num_rows > 0)) ? $ret->fetch_all(MYSQLI_ASSOC) : null;
    }
}
