<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Product extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'       => ['type' => 'INT', 'auto_increment' => true, 'constraint'=> 11, 'unsigned' => true,],
            'name'     => ['type' => 'VARCHAR', 'constraint' => 255],
            'category_id' => ['type' => 'INT','constraint' => 11,  'unsigned' => true],
            'price'    => ['type' => 'DECIMAL', 'constraint' => '10,2'],
            'created_at' => ['type' => 'DATETIME'],
            'updated_at' => ['type' => 'DATETIME'],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('category_id', 'category', 'id','CASCADE');
        $this->forge->createTable('product');
    }

    public function down()
    {
        //
    }
}
