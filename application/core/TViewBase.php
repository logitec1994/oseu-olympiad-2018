<?php

trait TViewBase
{
    protected function render($template, $data = null)
    {
        if(is_array($data)){
            extract($data);
        }

        include_once "templates/{$template}.php";
    }
}
