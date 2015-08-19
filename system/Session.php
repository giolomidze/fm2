<?php
class Session
{
    function __construct()
    {
        session_name('app_sess');
        session_start();
        session_regenerate_id(true);
    }
    static public function set($key, $value)
    {
        $_SESSION[$key] = $value;
        return true;
    }
    static public function get($key)
    {
        if(isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else {
            return false;
        }
    }
    static public function logout()
    {
        session_unset();
        session_destroy();
    }
}