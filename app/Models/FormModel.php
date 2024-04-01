<?php

namespace App\Models;

use CodeIgniter\Model;

class DatosModel extends Model
{
    protected $table      = 'form';
    protected $primaryKey = 'form_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nombre','direccion','correo','telefono'];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    
    public function insertar($datos){
        $Formulario=$this->db->table('form');
        $Formulario=$insert($datos);

        return $this->db->insertID();
    }
}