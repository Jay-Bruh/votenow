<?php

class DatabaseConnection
{
    public static $connexion = null;
    public function load_db()
    {
        if (is_null(self::$connexion)) {
            self::$connexion = new mysqli('localhost', 'root', 'root', 'upyouth');
        }
        return self::$connexion;
    }

    function __construct()
    {
    }
}
