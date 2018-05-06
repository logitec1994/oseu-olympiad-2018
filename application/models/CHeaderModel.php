<?php
include_once 'application/core/CModelBase.php';
include_once 'application/models/TUserApi.php';


class CHeaderModel extends CModelBase
{
    use TUserApi;

    public function __construct()
    {
        parent::__construct();
    }
}
