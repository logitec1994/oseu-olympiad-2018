<?php

include_once 'application/core/CControllerBase.php';
include_once 'application/core/TViewBase.php';
include_once 'application/models/CHeaderModel.php';
include_once 'application/config/Session.php';

define('HEADER_MENU_STATE_COOKIE', 'imf');

class CHeader extends CControllerBase
{
    use TViewBase;

    private $model = null;

    function __construct($page)
    {
        $this->model = new CHeaderModel();
    }

    function __destruct()
    {
        $this->model = null;
    }

    public function get($args)
    {
        $session = self::getCookie(ENGINE_SESSION_COOKIE_ID);
        $imf = boolval(self::getCookie(HEADER_MENU_STATE_COOKIE));

        $menuState = $imf ? 'folded' : '';
        $menuChevronDirection = $imf ? 'fa-angle-double-right' : 'fa-angle-double-left';

        $user = $this->model->getUserByCookie($session);

        $data = array(
            'menuChevronDirection' => $menuChevronDirection,
            'menuState' => $menuState,
            'isAuthorized' => !!$user
        );

        if (!!$user)
        {
            $data['userLastName'] = $user->lastname;
            $data['userFirstName'] = $user->firstname;
        }

        $this->render("header", $data);
    }

    public function post($args)
    {
    }
}
