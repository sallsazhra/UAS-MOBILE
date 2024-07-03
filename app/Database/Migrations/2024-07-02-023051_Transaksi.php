<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
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
            'tanggal_transaksi' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'nis_siswa' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'nama_siswa' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'nominal' => [
                'type' => 'INT',
                'null' => true,
            ],
            'berita' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
            
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('Transaksi');
    }

    public function down()
    {
        $this->forge->dropTable('Transaksi');
    }
}
