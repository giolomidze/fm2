<?php

class Composer
{
    private $db;

    public function __construct($database)
    {
        $this->db = $database;
    }

    public function users()
    {
        return $this->db->get_data('user');
    }

    public function menu_data()
    {
        return $this->db->somedata();
    }

    public function header()
    {
        return 'header info';
    }
}