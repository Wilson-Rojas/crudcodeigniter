<?php

namespace App\Models;

use CodeIgniter\Model;

class FormModel extends Model
{
    protected $table      = 'form';
    protected $primaryKey = 'form_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nombrecompleto','direccion','correo','telefono','estado'];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function listarnombres(){
        $nombres=$this->db->query("SELECT * FROM form");
        return $nombres->getResult();
    }
    
    public function insertar($datos){
        $Formulario=$this->db->table('form');
        $Formulario->insert($datos);

        return $this->db->insertID();
    }

    public function actualizar($data, $form_id) {
        $form = $this->db->table('form');
        $form->set($data);
        $form->where('form_id', $form_id);
        return $form->update();
    }

    public function obtenerNombre($data) {
        $Nombres =  $this->db->table('form');
        $Nombres->where($data);
        return $Nombres->get()->getResultArray();
    }

    public function eliminar($data) {
        $form = $this->db->table('form');
        $form->where($data);
        return $form->delete();
    }
}