<?php

namespace Core;

use Core\MySqlConnection;

class Model
{
    protected $db;

    public function __construct()
    {
        $this->db = MySqlConnection::getInstance();
    }
}
