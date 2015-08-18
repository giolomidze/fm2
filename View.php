<?php

class View
{
    private $composer;

    public function __construct(Composer $composer)
    {
        $this->composer = $composer;
    }

    public function load($view = false, $data = false)
    {
        if (isset($view) && file_exists(getcwd() . '/views/' . $view . '.php')) {
            if (isset($data) && is_array($data)) {
                extract($data);
            }
            include BASE_DIR . '/views/' . $view . '.php';
        }
    }
}