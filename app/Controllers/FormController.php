<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class FormController extends BaseController
{
    public function index()
    {
        return view('form');
    }

    public function store()
    {
        
        $datos=[
            "nombre"=>$_POST['nombre'],
            "correo"=>$_POST['telefono'],
            "telefono"=>$_POST['direccion'],
            "direccion"=>$_POST['correo']
        ];
        $form=New FormModel();
        echo $form->insertar($datos);

        //print_r($_POST);
    }
}
