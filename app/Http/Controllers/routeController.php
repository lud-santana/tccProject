<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class routeController extends Controller
{
    public function index() {
        echo view('INICIO/header');
        echo view('INICIO/index');
        echo view('INICIO/footer');
    }

    public function sobre() {
        echo view('SOBRE/header');
        echo view('SOBRE/index');
        echo view('SOBRE/footer');
    }

    public function cadastroEmpresas() {
        echo view('CADASTRO-EMPRESAS/header');
        echo view('CADASTRO-EMPRESAS/index');
        echo view('CADASTRO-EMPRESAS/footer');
    }

    public function areaEmpresas() {
        echo view('AREA-EMPRESAS/header');
        echo view('AREA-EMPRESAS/index');
        echo view('AREA-EMPRESAS/footer');
    }
}
