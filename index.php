<?php
require_once 'vendor/autoload.php';
require_once 'config/config.php';
require_once 'config/app.php';
require_once 'app/includes/session.php';
require_once 'routes/web.php';

use App\middleware\AuthMiddleware;

// Obtener la URI de la solicitud y eliminar los parámetros de consulta
$request = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

if (isset($_SESSION['menu'])) {
    $routes = array_merge($routes, $_SESSION['menu']);
}


// Buscar la ruta correspondiente en el arreglo de rutas
foreach ($routes as $route => $controllerAction) {
    if (preg_match("#^$route(?:/((.*))(\d+))?$#", $request, $matches)) {
        array_shift($matches);
        [$controller, $action, $protected] = $controllerAction;

        if ($protected) {
            AuthMiddleware::handle();
        }

        (new $controller())->$action(...$matches);
        exit();
    }
}

// Si no se encuentra la ruta, mostrar un error 404
http_response_code(404);
echo "404 Not Found";
