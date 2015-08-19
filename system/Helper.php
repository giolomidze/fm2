<?php

class Helper
{
    static public function change_lang($lang, $language = false)
    {
        $uri = explode('/', $_SERVER['REQUEST_URI']);
        $uri[2] = $lang;
        foreach ($uri as $uri_key => $uri_element) {
            $uri[$uri_key] = $language->translate_url($uri_element);
        }
        $uri = implode('/', $uri);
        $actual_link = "http://$_SERVER[HTTP_HOST]$uri";
        return $actual_link;
    }
}