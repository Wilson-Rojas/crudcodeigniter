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
    // Obtener los datos del formulario
    $nombre = $this->input->post('nombre');
    $correo = $this->input->post('correo');
    $telefono = $this->input->post('telefono');
    $direccion = $this->input->post('direccion');

    // Crear un arreglo con los datos
    $datos = array(
        'nombre' => $nombre,
        'correo' => $correo,
        'telefono' => $telefono,
        'direccion' => $direccion
    );

    // Cargar el modelo de la base de datos
    $this->load->model('FormModel');

    // Insertar los datos en la base de datos
    $resultado = $this->FormModel->insertar($datos);

    // Verificar si la inserción fue exitosa
    if ($resultado) {
        echo 'Los datos se han insertado correctamente.';
    } else {
        echo 'Ha ocurrido un error al insertar los datos.';
    }
}
}
