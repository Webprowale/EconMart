<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Category extends Migration
{
    public function up()
    {
     $this->forge->addField([
         'id' => [
             'type'           => 'INT',
             'constraint'     => 11,
             'unsigned'       => true,
             'auto_increment' => true,
         ],
         'name' => [
             'type'           => 'VARCHAR',
             'constraint'     => 100,
             'null'           => false,
         ],
         'description' => [
             'type'           => 'TEXT',
             'null'           => true,
         ],
         'created_at' => [
             'type'           => 'DATETIME',
             'null'           => false,
         ],
         'updated_at' => [
             'type'           => 'DATETIME',
             'null'           => true,
         ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('category');
    }

    public function down()
    {
        $this->forge->dropTable('category');
    }
}
