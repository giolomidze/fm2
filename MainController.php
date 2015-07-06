<?php
class MainController
{
    protected $uri;
    protected $db;
    protected $view;
    protected $composer;
    protected $lang;
    protected $translate;

    public function __construct($uri, $lang)
    {
        $this->lang = $lang;
        $this->uri = $uri;
        $this->db = new DB();
        $this->view = new View(new Composer($this->db), $this->lang, new Language($this->lang));
    }
    public function index()
    {
        $this->view->load('master');
    }
}

