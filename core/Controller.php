<?php

namespace Core;

class Controller
{
    public function redirectTo($url, $params = [])
    {
        $queryString = http_build_query($params);
        $redirectUrl = APP_NAME . $url . '?' . $queryString;

        if (sizeof($params) == 0) {
            $redirectUrl = $url;
        }

        header('Location: ' . $redirectUrl);
    }

    public function view($view, $data = [])
    {
        extract($data);
        require_once "app/views/{$view}.php";
    }

    public function jsonResponse($data, $statusCode = 200)
    {
        header('Content-Type: application/json');
        http_response_code($statusCode);
        echo json_encode($data);
        exit; // Siempre es una buena práctica llamar a exit después de enviar una respuesta
    }
}
