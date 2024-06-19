<?php

namespace Core;

use PDO;
use PDOException;

class MySqlConnection
{
    private static $instance = null;

    public static function getInstance()
    {
        if (self::$instance == null) {
            try {
                self::$instance = new PDO(
                    'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME,
                    DB_USER,
                    DB_PASS
                );
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Connection error: ' . $e->getMessage();
            }
        }

        return self::$instance;
    }
}
