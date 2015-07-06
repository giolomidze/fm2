<?php
class Composer
{
    private $db;

    public function __construct($database)
    {
        $this->db = $database;
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