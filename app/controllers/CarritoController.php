<?php

namespace App\Controllers;

use App\Models\Cita;
use App\Models\Servicio;
use Core\Controller;
use DateTime;

class CarritoController extends Controller
{

    public function index()
    {
        $carrito = $_SESSION['carrito'] ?? [];

        $data = [
            "carrito" => $carrito
        ];

        $this->view('carrito/index', $data);
    }

    public function addToCart()
    {
        if (!isset($_POST['servicio_id']) || !isset($_POST['cantidad'])) {
            $this->redirectTo('servicios');
        }

        $servicioId = $_POST['servicio_id'];
        $cantidad = (int)$_POST['cantidad'];

        // Obtener información del servicio
        $servicio = (new Servicio())->findServiceById($servicioId);

        if (!isset($_SESSION['carrito'])) {
            $_SESSION['carrito'] = [];
        }


        // Agregar el servicio al carrito
        if (isset($_SESSION['carrito'][$servicioId])) {
            $_SESSION['carrito'][$servicioId]['cantidad'] += $cantidad;
        } else {
            $_SESSION['carrito'][$servicioId] = [
                'servicio' => $servicio,
                'cantidad' => $cantidad
            ];
        }

        $this->redirectTo('/clinica/');
    }

    public function removeFromCart()
    {
        if (!isset($_GET['servicio_id'])) {
            $this->redirectTo('carrito/carrito');
        }

        $servicioId = $_GET['servicio_id'];

        if (isset($_SESSION['carrito'][$servicioId])) {
            unset($_SESSION['carrito'][$servicioId]);
        }

        $this->redirectTo('/clinica/carrito');
    }

    public function Checkout()
    {
        if (!isset($_SESSION['carrito']) || !isset($_SESSION["user"])) {
            $this->redirectTo('/clinica/');
        }

        $carrito = $_SESSION['carrito'] ?? [];


        try {

            $now = new DateTime();

            foreach ($carrito as $servicio) {
                $POST = [
                    "cliente_id" => $_SESSION["user"]["id"],
                    "servicio_id" => $servicio['servicio']->servicio_id,
                    "fecha_hora" => $now->format('Y-m-d H:i:s'),
                    "estado" => "PENDIENTE"
                ];

                (new Cita())->create($POST);
            }

            unset($_SESSION['carrito']);

            $toastType = 'success';
            $toastMessage = 'Cita creada correctamente';
        } catch (\Throwable $th) {
            $toastType = 'error';
            $toastMessage = 'Error al registrarla cita: ' . $th->getMessage();
        }

        $this->redirectTo('cliente/citas', ['toastType' => $toastType, 'toastMessage' => $toastMessage]);
    }
}
