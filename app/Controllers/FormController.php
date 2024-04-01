<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class FormController extends BaseController
{
    public function index()
    {
        $form=New \App\Models\FormModel();
        $datos=$form->listarnombres();
        $mensaje = session('mensaje');
        $data=[
            "datos"=>$datos,
            "mensaje" => $mensaje
        ];

        return view('form', $data);
    }

    public function store()
    {
        
        $datos=[
            "nombrecompleto"=>$_POST['nombrecompleto'],
            "correo"=>$_POST['correo'],
            "telefono"=>$_POST['telefono'],
            "direccion"=>$_POST['direccion'],
            "estado"=>1
        ];
        $form=New \App\Models\FormModel();
        $respuesta = $form->insertar($datos);
        if($respuesta > 0){
            return redirect()->to(base_url().'/form')->with('mensaje','1');
        }else{
            return redirect()->to(base_url().'/form')->with('mensaje','0');
        }

        
    }

    public function obtenerNombre($form_id) {
		$data = ["form_id" => $form_id];
		$form=New \App\Models\FormModel();
		$respuesta = $form->obtenerNombre($data);

		$datos = ["datos" => $respuesta];

		return view('actualizar', $datos);
	}

    public function actualizar(){
		$datos = 
        [
            "nombrecompleto"=>$_POST['nombrecompleto'],
            "correo"=>$_POST['correo'],
            "telefono"=>$_POST['telefono'],
            "direccion"=>$_POST['direccion'],
        ];
		$form_id = $_POST['form_id'];

		$form=New \App\Models\FormModel();

		$respuesta = $form->actualizar($datos, $form_id);

		if ($respuesta) {
			return redirect()->to(base_url().'/form')->with('mensaje','2');
		} else {
			return redirect()->to(base_url().'/form')->with('mensaje','3');
		}
	}

    public function eliminar($form_id){
		$form=New \App\Models\FormModel();
		$data = ["form_id" => $form_id];

		$respuesta = $form->eliminar($data);

		if ($respuesta) {
			return redirect()->to(base_url().'/form')->with('mensaje','4');
		} else {
			return redirect()->to(base_url().'/form')->with('mensaje','5');
		}
	}
}
