<?php

namespace App\Controllers;

use App\Models\Cita;
use App\Models\Servicio;
use Core\Controller;

class ClienteCitaController extends Controller
{
    public function index()
    {
        try {
            $userId = $_SESSION["user"]["id"];
            $citas = (new Cita())->findByUserId($userId);
            $this->view('paciente/citas/index', ["citas" => $citas]);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    public function Add()
    {
        $servicios = (new Servicio())->all();

        $data = [
            'servicios' => $servicios
        ];

        $this->view('paciente/citas/create',  $data);
    }

    public function Delete()
    {
        try {

            if (!isset($_GET["id"])) {
                $this->redirectTo('');
            }

            $servicio = (new Cita())->delete($_GET["id"]);

            $toastType = 'success';
            $toastMessage = 'Cita eliminada correctamente';
        } catch (\Throwable $th) {
            $toastType = 'error';
            $toastMessage = 'Error al eliminar la cita';
        }

        $this->redirectTo('cliente/citas', ['toastType' => $toastType, 'toastMessage' => $toastMessage]);
    }

    public function create()
    {

        try {

            if (!isset($_POST['servicio'])) {
                $this->redirectTo('');
            }

            $POST = [
                "cliente_id" => $_SESSION["user"]["id"],
                "servicio_id" => $_POST["servicio"],
                "fecha_hora" => $_POST["fechahora"],
                "estado" => "PENDIENTE"
            ];

            (new Cita())->create($POST);

            $toastType = 'success';
            $toastMessage = 'Cita creada correctamente';
        } catch (\Throwable $th) {
            $toastType = 'error';
            $toastMessage = 'Error al registrarla cita';
        }

        $this->redirectTo('cliente/citas', ['toastType' => $toastType, 'toastMessage' => $toastMessage]);
    }

    public function Edit()
    {

        if (!isset($_GET["id"])) {
            $this->redirectTo('');
        }

        $cita = (new Cita())->findById($_GET["id"]);

        $servicios = (new Servicio())->all();

        $this->view('paciente/citas/edit', ["cita" => $cita, "servicios" => $servicios]);
    }

    public function update()
    {

        try {

            if (!isset($_POST['servicio'])) {
                $this->redirectTo('');
            }

            $citaId = $_POST["cita_id"];

            $POST = [
                "cliente_id" => $_SESSION["user"]["id"],
                "servicio_id" => $_POST["servicio"],
                "fecha_hora" => $_POST["fechahora"],
                "estado" => $_POST["estado"]
            ];

            (new Cita())->update($citaId, $POST);

            $toastType = 'success';
            $toastMessage = 'Cita actualizada correctamente';
        } catch (\Throwable $th) {
            $toastType = 'error';
            $toastMessage = 'Error al actualizar cita';
        }

        $this->redirectTo('cliente/citas', ['toastType' => $toastType, 'toastMessage' => $toastMessage]);
    }
}
