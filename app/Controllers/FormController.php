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
        $reglas=[
            'nombrecompleto'=>'required',
            'correo'=>'required',
            'telefono'=>'required',
        ];
        if(!$this->validate($reglas)){
            return redirect()->back()->withInput(); 
              
        }
        $datos=[
            "nombrecompleto"=>$_POST['nombrecompleto'],
            "correo"=>$_POST['correo'],
            "telefono"=>$_POST['telefono'],
            "direccion"=>$_POST['direccion'],
            "estado"=>1
        ];
        $form=New \App\Models\FormModel();
        $respuesta = $form->insertar($datos);
        // Preparar la respuesta
        $response = array(
            'success' => true,
            
            'message' => 'Datos guardados correctamente',
            'datos' => $respuesta
        );
        // Preparar los datos para la tabla
        
        // Enviar respuesta en formato JSON
        echo json_encode($response);

        
    }

    public function obtenerNombre($form_id) {
		$data = ["form_id" => $form_id];
		$form=New \App\Models\FormModel();
		$respuesta = $form->obtenerNombre($data);

		$datos = ["datos" => $respuesta];

		return view('actualizar', $datos);
	}

    public function cargarnombres() {
        $formId = $_POST['form_id'];
        $data = ["form_id" => $formId];
        $form = new \App\Models\FormModel();
        $respuesta = $form->obtenerNombre($data);

        $response = array(
            'success' => true,
            'message' => 'Datos traidos correctamente',
            'datos' => $respuesta
        );

        // Enviar respuesta en formato JSON
        echo json_encode($response);

	}

    public function actualizar(){
		$datos = 
        [
            "form_id"=>$_POST['form_id'],
            "nombrecompleto"=>$_POST['nombrecompleto'],
            "correo"=>$_POST['correo'],
            "telefono"=>$_POST['telefono'],
            "direccion"=>$_POST['direccion'],
        ];
		$form_id = $_POST['form_id'];

		$form=New \App\Models\FormModel();

		$respuesta = $form->actualizar($datos, $form_id);

		$response = array(
            'success' => true,
            
            'message' => 'Datos guardados correctamente',
            
            'datos' => $respuesta
        );
        // Preparar los datos para la tabla
        
        // Enviar respuesta en formato JSON
        echo json_encode($response);
	}

    public function eliminar(){
        $formId = $_POST['form_id'];
        //$formId = $this->input->post('form_id');
    
        $form=New \App\Models\FormModel();
		$data = ["form_id" => $formId];

		$respuesta = $form->eliminar($data);


        $response = array(
            'success' => true,
            'message' => 'Elemento eliminado correctamente'
        );
    
        // Enviar respuesta en formato JSON
        echo json_encode($response);
    }
    
}
