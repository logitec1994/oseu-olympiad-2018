<?php

include_once 'application/config/Session.php';
include_once 'application/core/CModelBase.php';
include_once 'application/models/TUserApi.php';



class CQuestModel extends CModelBase
{
    use TUserApi;

    public function __construct()
    {
        parent::__construct();
    }
}
