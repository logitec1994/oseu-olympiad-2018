<?php

include_once 'application/core/CControllerBase.php';
include_once 'application/core/TViewBase.php';


class CQuest extends CControllerBase
{
    use TViewBase;

    function __construct($page)
    {
    }

    public function get($args)
    {
        $event = intval($args[0]);
        $eventQuest = intval($args[1]);

        $this->render("quests/{$event}/{$eventQuest}");
    }

    public function post($args)
    {
    }
}
