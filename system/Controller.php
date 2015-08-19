<?php

class Controller
{
    protected $uri;
    protected $db;
    protected $view;
    protected $composer;

    public function __construct($uri)
    {
        $this->uri = $uri;
        $this->db = new DB();
        $this->view = new View(new Composer($this->db));
    }

    public function index()
    {
        $this->view->load('master');
    }
}

