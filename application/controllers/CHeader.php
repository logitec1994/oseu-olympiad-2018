<?php

include_once 'application/core/CControllerBase.php';
include_once 'application/core/TViewBase.php';

define('HEADER_MENU_STATE_COOKIE', 'imf');

class CHeader extends CControllerBase
{
    use TViewBase;

    function __construct($page)
    {
    }

    public function get($args)
    {
        $imf = self::getCookie(HEADER_MENU_STATE_COOKIE);

        $menuState = $imf ? 'folded' : '';
        $menuChevronDirection = $imf ? 'fa-chevron-right' : 'fa-chevron-left';

        $this->render("header", array(
            'menuChevronDirection' => $menuChevronDirection,
            'menuState' => $menuState
        ));
    }

    public function post($args)
    {
    }
}
