<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'nis_siswa' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'nama_siswa' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('Siswa');
    }

    public function down()
    {
        $this->forge->dropTable('Siswa');
    }
}
