<?php
class Helper
{
    static public function change_lang($lang)
    {
        $uri = explode('/', $_SERVER['REQUEST_URI']);
        $uri[2] = $lang;
        $uri = implode('/', $uri);
        $actual_link = "http://$_SERVER[HTTP_HOST]$uri";
        return $actual_link;
    }
}