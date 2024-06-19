<?php

namespace App\Controllers;

use App\Models\Servicio;
use Core\Controller;

class ServicioController extends Controller
{

    public function index()
    {
        $servicios = (new Servicio())->all();

        $this->view('admin/servicios/index', ['servicios' => $servicios]);
    }

    public function Add()
    {
        $this->view('admin/servicios/create');
    }

    public function Edit()
    {

        if (!isset($_GET["id"])) {
            $this->redirectTo('');
        }

        $servicio = (new Servicio())->findServiceById($_GET["id"]);

        $this->view('admin/servicios/edit', ["servicio" => $servicio]);
    }

    public function Delete()
    {
        try {

            if (!isset($_GET["id"])) {
                $this->redirectTo('');
            }

            $servicio = (new Servicio())->delete($_GET["id"]);

            $toastType = 'success';
            $toastMessage = 'Servicio eliminado correctamente';
        } catch (\Throwable $th) {
            $toastType = 'error';
            $toastMessage = 'Error al eliminar el servicio';
        }

        $this->redirectTo('servicios', ['toastType' => $toastType, 'toastMessage' => $toastMessage]);
    }

    public function create()
    {

        try {

            if (!isset($_POST['precio'])) {
                $this->redirectTo('');
            }

            (new Servicio())->create($_POST);

            $toastType = 'success';
            $toastMessage = 'Servicio creado correctamente';
        } catch (\Throwable $th) {
            $toastType = 'error';
            $toastMessage = 'Error al registrar el servicio';
        }

        $this->redirectTo('servicios', ['toastType' => $toastType, 'toastMessage' => $toastMessage]);
    }

    public function Update()
    {

        try {

            if (!isset($_POST['id'])) {
                $this->redirectTo('');
            }

            (new Servicio())->update($_POST['id'], $_POST);

            $toastType = 'success';
            $toastMessage = 'Servicio actualizado correctamente';
        } catch (\Throwable $th) {
            $toastType = 'error';
            $toastMessage = 'Error al actualizar el servicio';
        }

        $this->redirectTo('servicios', ['toastType' => $toastType, 'toastMessage' => $toastMessage]);
    }
}
