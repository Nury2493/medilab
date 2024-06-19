<?php

namespace App\Controllers;

use App\Models\Servicio;
use Core\Controller;

class AppController extends Controller
{


    public function index($page = 1)
    {
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;

        $page = max(1, $page);

        $servicioModel = new Servicio();

        $limit = 8;

        $offset = ($page - 1) * $limit;

        $servicios = $servicioModel->getServicios($limit, $offset);

        $totalServicios = $servicioModel->countAll();

        $totalPages = ceil($totalServicios / $limit);

        $data = [
            "servicios" => $servicios,
            "totalPages" => $totalPages,
            "currentPage" => $page
        ];

        $this->view('home/index', $data);
    }
}
