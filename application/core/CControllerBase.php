<?php


abstract class CControllerBase
{
    abstract function __construct($page);

    public function run($args)
    {
        $methodName = strtolower($_SERVER["REQUEST_METHOD"]);

        if (ENGINE_DEBUG) {
            $joinedArguments = implode(",", $args);
            echo __METHOD__ . "({$joinedArguments}) -> {$methodName}" . '<br/>';
        }

        if (method_exists($this, $methodName))
        {
            call_user_func(array($this, $methodName), $args);
        }
        else
        {
            throw new Exception("Method \"{$_SERVER["REQUEST_METHOD"]}\" Not Allowed", 405);
        }
    }

    static public function getUserCookie()
    {
        $cookie = null;

        if (array_key_exists(ENGINE_SESSION_COOKIE_ID, $_COOKIE))
        {
            $cookie = $_COOKIE[ENGINE_SESSION_COOKIE_ID];
        }

        return $cookie;
    }
}
