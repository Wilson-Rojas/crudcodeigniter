<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddForm extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'form_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nombrecompleto' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'correo' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'telefono' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'direccion' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('form_id', true);
        $this->forge->createTable('form');
    }

    public function down()
    {
        $this->forge->dropTable('form');
    }
}