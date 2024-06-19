<?php

namespace App\Controllers;

use App\Models\Menu;
use Core\Controller;

class HomeController extends Controller
{

    public function index()
    {
        $this->view('home/index');
    }

    public function homePage()
    {
        $this->view('home/dashboard');
    }
}
