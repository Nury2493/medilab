<?php

namespace App\Controllers;

use App\Models\Menu;
use App\Models\Rol;
use App\Models\User;
use Core\Controller;

class AuthController extends Controller
{

    private $userService;

    public function __construct()
    {
        $this->userService = new User();
    }

    public function index()
    {
        $this->view('auth/login');
    }

    public function register()
    {
        $this->view('auth/register');
    }

    public function create()
    {
        try {
            // Obtener el rol 
            $rolService = new Rol();

            $rol = $rolService->findByRolName("Cliente");

            // Usuario a insertar 
            $usuario = [
                "name" => $_POST["name"],
                "email" => $_POST["email"],
                "password" => $_POST["password"],
                "rol_id" => $rol->id,
                "FechaNacimiento" => $_POST["fechaNacimiento"],
                "Direccion" => $_POST["direccion"],
                "Telefono" => $_POST["telefono"],
                "dui" => $_POST["dui"],
                "CondicionesMedicas" => $_POST["condicionesMedicas"],
            ];

            $this->userService->create($usuario);

            $toastType = 'success';
            $toastMessage = 'Usuario creado correctamente';
        } catch (\Throwable $th) {
            $toastType = 'error';
            $toastMessage = 'Error al registrar el usuario';
        }

        $this->redirectTo('', ['toastType' => $toastType, 'toastMessage' => $toastMessage]);
    }

    public function login()
    {
        try {

            $password = $_POST["password"];

            // Buscar al usuario por correo electrónico en la base de datos
            $usuario = $this->userService->findUsuarioByEmail($_POST);

            if ($usuario && password_verify($password, $usuario['password'])) {
                $_SESSION['user'] = $usuario;
                $_SESSION['rol'] = (new Rol())->find($usuario['rol_id']);


                $this->redirectTo('dashboard');
                return;
            } else {
                $toastType = 'error';
                $toastMessage = 'Credenciales incorrectas';
            }
        } catch (\Throwable $th) {
            $toastType = 'error';
            $toastMessage = 'Error al intentar iniciar sesión: ' . $th->getMessage();
        }

        $this->redirectTo('', ['toastType' => $toastType, 'toastMessage' => $toastMessage]);
    }

    public function LogOut()
    {
        session_start();
        session_unset();
        $this->redirectTo('/clinica');
    }
}
