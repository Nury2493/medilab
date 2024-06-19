<?php

namespace App\Controllers;

use App\Models\Resultado;
use Core\Controller;
use helpers\FileUploader;

class ResultadoController extends Controller
{

    public function uploadResultado()
    {
        try {
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {

                $targetDir = "files/";
                $fichero_subido = $targetDir . uniqid() . "_" . $_POST["citaId"] . "_" .  $_POST["nombre"] . ".pdf";

                if (!is_dir($targetDir)) {
                    mkdir($targetDir, 0777, true);
                }

                if (move_uploaded_file($_FILES['file']['tmp_name'], $fichero_subido)) {
                    $toastType = 'success';
                    $toastMessage = 'Resultado creado correctamente';

                    $archivo = [
                        'url' => $fichero_subido,
                        'idCita' => $_POST["citaId"],
                        'nombreArchivo' => $_POST["nombre"]
                    ];

                    (new Resultado())->create($archivo);
                } else {
                    $toastType = 'error';
                    $toastMessage = 'No se subió el archivo';
                }



                $this->redirectTo('admin/citas', ['toastType' => $toastType, 'toastMessage' => $toastMessage]);
            }
        } catch (\Exception $e) {
            $toastType = 'error';
            $toastMessage = 'Error al registrar el resultado ' . $e->getMessage();
        }

        $this->redirectTo('admin/citas', ['toastType' => $toastType, 'toastMessage' => $toastMessage]);
    }

    public function Delete()
    {
        try {

            if (!isset($_GET["id"])) {
                $this->redirectTo('');
            }

            $resultado = (new Resultado())->findById($_GET["id"]);

            $this->deleteFile($resultado->url);

            (new Resultado())->delete($_GET["id"]);

            $toastType = 'success';
            $toastMessage = 'Resultado eliminado correctamente';
        } catch (\Throwable $th) {
            $toastType = 'error';
            $toastMessage = 'Error al eliminar el resultado';
        }

        $this->redirectTo('admin/citas', ['toastType' => $toastType, 'toastMessage' => $toastMessage]);
    }

    public function GetResultadosByCita()
    {
        try {
            if (!isset($_GET["id"])) {
                $this->redirectTo('');
            }

            $resultados = (new Resultado())->findByIdCita($_GET["id"]);

            $this->jsonResponse(['status' => 'success', 'data' => $resultados]);
        } catch (\Throwable $th) {
            $toastType = 'error';
            $toastMessage = 'Error al cargar los resultados';
            $this->redirectTo('admin/citas', ['toastType' => $toastType, 'toastMessage' => $toastMessage]);
        }
    }

    private function deleteFile($filePath)
    {
        try {
            // Verifica si el archivo existe antes de intentar eliminarlo
            if (file_exists($filePath)) {
                // Intenta eliminar el archivo
                if (unlink($filePath)) {
                    return true; // El archivo se eliminó correctamente
                } else {
                    throw new \Exception("No se pudo eliminar el archivo.");
                }
            } else {
                throw new \Exception("El archivo no existe.");
            }
        } catch (\Exception $e) {
            // Maneja cualquier error que ocurra durante la eliminación del archivo
            throw new \Exception("Error al eliminar el archivo: " . $e->getMessage());
        }
    }
}
