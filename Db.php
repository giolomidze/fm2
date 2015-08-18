<?php

class DB extends PDO
{
    const DB_HOST = 'localhost';
    const DB_USER = 'root';
    const DB_PASS = '1234';
    const DB_NAME = 'test_db';

    function __construct()
    {
        try {
            parent::__construct("mysql:host=".self::DB_HOST.";dbname=".self::DB_NAME.";charset=utf8", self::DB_USER, self::DB_PASS);
            parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            parent::setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function get_data($from)
    {
        return $this->query("SELECT * FROM ".$from);
    }

}