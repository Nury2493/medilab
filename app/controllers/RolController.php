<?php

namespace App\Controllers;

use App\Models\Rol;
use Core\Controller;

class RolController extends Controller
{

    public function index()
    {
        $roles = (new Rol())->all();
        $this->view('roles/index', ['roles' => $roles]);
    }
}
