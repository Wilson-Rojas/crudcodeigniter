<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Datos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'apellido' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'correo' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'telefono' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_form', true);
        $this->forge->createTable('datos');
    }

    public function down()
    {
        $this->forge->dropTable('blog');
    }
}