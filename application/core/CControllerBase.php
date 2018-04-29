<?php


abstract class CControllerBase
{

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


    abstract public function get($args);

    abstract public function post($args);
}
