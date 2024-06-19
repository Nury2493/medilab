<?php

namespace App\Controllers;

use App\Models\User;
use Core\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = (new User())->all();
        $this->view('users/index', ['users' => $users]);
    }

    public function create()
    {
        $this->view('users/create');
    }

    public function store()
    {
        $user = new User();
        $user->create($_POST);
        $this->redirectTo('user/index');
    }

    public function show($id)
    {
        $user = (new User())->findUsuarioById($id);
        $this->view('users/show', ['user' => $user]);
    }

    public function showById()
    {
        try {
            if (!isset($_GET["id"])) {
                $this->redirectTo('');
            }

            $user = (new User())->findUsuarioById($_GET["id"]);
            $this->jsonResponse(['status' => 'success', 'data' => $user]);
        } catch (\Throwable $th) {
            $toastType = 'error';
            $toastMessage = 'Error al cargar los resultados';
            $this->redirectTo('admin/citas', ['toastType' => $toastType, 'toastMessage' => $toastMessage]);
        }
    }

    public function edit($id)
    {
        $user = (new User())->findUsuarioById($id);
        $this->view('users/edit', ['user' => $user]);
    }

    public function update($id)
    {
        $user = new User();
        $user->update($id, $_POST);
        $this->redirectTo('user/index');
    }

    public function delete($id)
    {
        $user = new User();
        $user->delete($id);
        $this->redirectTo('user/index');
    }
}
