<?php

class CRouter
{

    private $handlers = array();

    function __construct()
    {
    }

    private function constructController($page)
    {
        $className = 'C' . ucwords($page);
        $include = 'application/controllers/' . $className . '.php';

        if (ENGINE_DEBUG) {
            echo "{$include}<br/>";
        }

        include_once $include;

        if (ENGINE_DEBUG) {
            echo "{$className}::__construct({$page})<br/>";
        }

        return new $className($page);
    }

    public function add($regex, $page, $args = array())
    {
        array_push($this->handlers, (object)array(
            'page' => $page,
            'name' => $regex,
            'args' => $args
        ));
    }

    static private function getUrl()
    {
        $url = explode("?", $_SERVER["REQUEST_URI"], 2);
        return (count($url) == 2 ? $url[0] : $_SERVER["REQUEST_URI"]);
    }


    public function run()
    {
        try
        {
            $handler = $this->getRequestedHandler();

            $pageElements = array(
                $this->constructController("header"),
                $this->constructController($handler->page),
                $this->constructController("footer"),
            );

            foreach ($pageElements as $element)
            {
                $element->run($handler->args);
            }
        }
        catch (Exception $e)
        {
            switch ($e->getCode())
            {
                case 403: self::errorPage403(); break;
                case 404: self::errorPage404(); break;
                case 405: self::errorPage405(); break;

                default:
                    printf("Exception: %s - %s", $e->getMessage(), $e->getCode());
                    break;
            }
        }
    }

    private function getRequestedHandler()
    {
        foreach ($this->handlers as $handler)
        {
            if (preg_match(sprintf("|%s|", $handler->name), self::getUrl(), $matches))
            {
                for ($i = 1; $i < count($matches); ++$i)
                {
                    array_push($handler->args, $matches[$i]);
                }
                return $handler;
            }
        }

        throw new Exception("Not Found", 404);
    }

    static public function redirect($page)
    {
        header('Location: ' . $page);
    }

    static public function errorPage403()
    {
        header('HTTP/1.1 403 Forbidden');
        header("Status: 403 Forbidden");
        self::redirect('/error/403');
    }

    static public function errorPage404()
    {
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        self::redirect('/error/404');
    }

    static public function errorPage405()
    {
        header('HTTP/1.1 405 Method Not Allowed');
        header("Status: 405 Method Not Allowed");
        self::redirect('/error/405');
    }
}

