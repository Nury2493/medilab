<?php

namespace App\middleware;

class AuthMiddleware
{
    public static function handle()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: /clinica');
            exit();
        }
    }
}
