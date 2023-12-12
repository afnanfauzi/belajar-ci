<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Post extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'           => [
                // type untuk tipe data
                'type'           => 'INT',
                //constraint untuk panjang data
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],
            'title'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'content'     => [
                'type'           => 'TEXT'
            ],
        ]);

        // menjadikan kolom id sebagai primary key
        $this->forge->addKey('id', TRUE);
        // membuat tabel dengan nama posts
        $this->forge->createTable('posts');
    }

    public function down()
    {
        $this->forge->dropTable('posts');
    }
}
