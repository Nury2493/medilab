<?php

use App\Controllers\AppController;
use App\Controllers\AuthController;
use App\Controllers\CarritoController;
use App\Controllers\CitaController;
use App\Controllers\ClienteCitaController;
use App\Controllers\HomeController;
use App\Controllers\ResultadoController;
use App\Controllers\ServicioController;
use App\Controllers\UserController;

$routes = [
    'clinica' => [AppController::class, 'index', false],
    'clinica/auth/login' => [AuthController::class, 'index', false],
    'clinica/register' => [AuthController::class, 'register', false],
    'clinica/create' => [AuthController::class, 'create', false],
    'clinica/login' => [AuthController::class, 'login', false],

    'clinica/dashboard' => [HomeController::class, 'homePage', true],
    'clinica/logout' => [AuthController::class, 'LogOut', true],

    // ADMINISTRADOR
    'clinica/servicios' => [ServicioController::class, 'index', true],
    'clinica/servicios/new' => [ServicioController::class, 'add', true],
    'clinica/servicios/create' => [ServicioController::class, 'create', true],
    'clinica/servicios/edit' => [ServicioController::class, 'edit', true],
    'clinica/servicios/delete' => [ServicioController::class, 'delete', true],
    'clinica/servicios/update' => [ServicioController::class, 'update', true],

    'clinica/admin/citas' => [CitaController::class, 'index', true],
    'clinica/admin/cita/delete' => [CitaController::class, 'delete', true],
    'clinica/admin/cita/new' => [CitaController::class, 'add', true],
    'clinica/admin/cita/export' => [CitaController::class, 'export', true],
    'clinica/admin/cita/create' => [CitaController::class, 'create', true],
    'clinica/admin/cita/edit' => [CitaController::class, 'edit', true],
    'clinica/admin/cita/update' => [CitaController::class, 'update', true],
    'clinica/user' => [UserController::class, 'showById', true],

    // RESULTADOS CITAS
    'clinica/admin/resultados' => [ResultadoController::class, 'GetResultadosByCita', true],
    'clinica/admin/resultados/uploadResultado' => [ResultadoController::class, 'uploadResultado', true],
    'clinica/admin/resultados/eliminar' => [ResultadoController::class, 'Delete', true],

    // GRAFICOS
    'clinica/admin/serviciosPorCitas' => [CitaController::class, 'GetCitasPorExamen', true],

    //ClIENTE
    'clinica/cliente/citas' => [ClienteCitaController::class, 'index', true],
    'clinica/cliente/cita/delete' => [ClienteCitaController::class, 'delete', true],
    'clinica/cliente/cita/new' => [ClienteCitaController::class, 'add', true],
    'clinica/cliente/cita/create' => [ClienteCitaController::class, 'create', true],
    'clinica/cliente/cita/edit' => [ClienteCitaController::class, 'edit', true],
    'clinica/cliente/cita/update' => [ClienteCitaController::class, 'update', true],

    //Carrito
    'clinica/carrito' => [CarritoController::class, 'index', false],
    'clinica/carrito/add' => [CarritoController::class, 'addToCart', false],
    'clinica/carrito/remove' => [CarritoController::class, 'removeFromCart', false],
    'clinica/carrito/checkout' => [CarritoController::class, 'Checkout', false],
];
