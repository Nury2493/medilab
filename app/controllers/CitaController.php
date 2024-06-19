<?php

namespace App\Controllers;

use App\Models\Cita;
use App\Models\Rol;
use App\Models\Servicio;
use App\Models\User;
use Core\Controller;
use TCPDF;

class CitaController extends Controller
{
    public function index()
    {
        try {
            $citas = (new Cita())->all();
            $this->view('admin/citas/index', ["citas" => $citas]);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    public function Add()
    {
        $rol = (new Rol())->findByRolName("Cliente");
        $servicios = (new Servicio())->all();
        $clientes = (new User())->findUsersByRol($rol->id);

        $data = [
            'servicios' => $servicios,
            'clientes' => $clientes
        ];

        $this->view('admin/citas/create',  $data);
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

        $this->redirectTo('admin/citas', ['toastType' => $toastType, 'toastMessage' => $toastMessage]);
    }

    public function create()
    {

        try {

            if (!isset($_POST['servicio'])) {
                $this->redirectTo('');
            }

            $POST = [
                "cliente_id" => $_POST["cliente"],
                "servicio_id" => $_POST["servicio"],
                "fecha_hora" => $_POST["fechahora"],
                "estado" => "PENDIENTE"
            ];

            (new Cita())->create($POST);

            $toastType = 'success';
            $toastMessage = 'Cita creada correctamente';
        } catch (\Throwable $th) {
            $toastType = 'error';
            $toastMessage = 'Error al registrarla cita. Por favor, revisa los valores';
        }

        $this->redirectTo('admin/citas', ['toastType' => $toastType, 'toastMessage' => $toastMessage]);
    }

    public function Edit()
    {

        if (!isset($_GET["id"])) {
            $this->redirectTo('');
        }

        $cita = (new Cita())->findById($_GET["id"]);
        $estados = [
            "PENDIENTE" => "PENDIENTE",
            "FINALIZADO" => "FINALIZADO",
            "EN PROCESO" => "EN PROCESO"
        ];
        $servicios = (new Servicio())->all();

        $this->view('admin/citas/edit', ["cita" => $cita, "servicios" => $servicios, "estados" => $estados]);
    }

    public function update()
    {

        try {

            if (!isset($_POST['servicio'])) {
                $this->redirectTo('');
            }

            $citaId = $_POST["cita_id"];

            $POST = [
                "cliente_id" => $_POST["cliente"],
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

        $this->redirectTo('admin/citas', ['toastType' => $toastType, 'toastMessage' => $toastMessage]);
    }

    public function export()
    {
        try {
            $citas = (new Cita())->all();
            // Crear una instancia de TCPDF
            $pdf = new TCPDF();

            // Configurar el documento
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('Tu Nombre');
            $pdf->SetTitle('Citas');
            $pdf->SetSubject('Listado de Citas');
            $pdf->SetKeywords('TCPDF, PDF, citas, ejemplo');

            // Eliminar la cabecera y el pie de página predeterminados
            $pdf->setPrintHeader(false);
            $pdf->setPrintFooter(false);

            // Establecer márgenes
            $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
            $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

            // Añadir una página
            $pdf->AddPage();

            // Establecer fuente
            $pdf->SetFont('helvetica', '', 12);

            // Contenido del PDF
            $html = '
            <h1>Citas</h1>
            <table border="1" style="padding:5px;" id="miTabla" class="table text-nowrap mb-0 align-middle table-striped table-bordered">
                <thead class="text-dark fs-4 bg-white" style="position: sticky; top:0">
                    <tr>
                        <th class="border-bottom-0"><b>Cliente</b></th>
                        <th class="border-bottom-0"><b>Servicio</b></th>
                        <th class="border-bottom-0"><b>Fecha y hora</b></th>
                        <th class="border-bottom-0"><b>Estado</b></th>
                    </tr>
                </thead>
                <tbody>';

            // Verificar si hay citas
            if (sizeof($citas) <= 0) {
                $html .= '
                    <tr>
                        <td class="border-bottom-0 text-center" colspan="5">No hay registros</td>
                    </tr>';
            } else {
                // Recorrer las citas y agregar filas a la tabla
                foreach ($citas as $cita) {
                    $html .= '
                        <tr>
                            <td class="border-bottom-0">' . $cita->cliente . '</td>
                            <td class="border-bottom-0">' . $cita->servicio . '</td>
                            <td class="border-bottom-0">' . $cita->fecha_hora . '</td>
                            <td class="border-bottom-0">' . strtoupper($cita->estado) . '</td>
                        </tr>';
                }
            }

            $html .= '
                        </tbody>
                    </table>';

            // Escribir el contenido HTML
            $pdf->writeHTML($html, true, false, true, false, '');

            // Salida del archivo PDF
            $pdf->Output('citas.pdf', 'I'); // 'I' para mostrar en el navegador, 'D' para descargar el archivo
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    public function GetCitasPorExamen()
    {
        try {
            $cantidadServicios = (new Servicio())->cantidadServicios();
            $this->jsonResponse(['status' => 'success', 'data' => $cantidadServicios]);
        } catch (\Throwable $th) {
            $toastType = 'error';
            $toastMessage = 'Error al cargar los resultados';
            $this->redirectTo('admin/citas', ['toastType' => $toastType, 'toastMessage' => $toastMessage]);
        }
    }
}
