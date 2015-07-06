<?php
class View
{
    private $composer;
    private $lang;
    private $language;

    public function __construct(Composer $composer, $lang, $language)
    {
        $this->composer = $composer;
        $this->lang = $lang;
        $this->language = $language;
    }

    public function load($view = false, $data = false)
    {
        if(isset($view) && file_exists(getcwd().'/views/'.$view.'.php')) {
            if(isset($data) && is_array($data)) {
                extract($data);
            }
            include '/views/'.$view.'.php';
        }
    }
}