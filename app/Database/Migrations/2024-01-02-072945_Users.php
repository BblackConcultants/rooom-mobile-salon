<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'    => [
                'type'          => 'INT',
                'constraint'    => 11,
                'auto_increment'    => True
            ],
            'first_name'    => [
                'type'          => 'VARCHAR',
                'constraint'    => 200
            ],
            'surname'    => [
                'type'          => 'VARCHAR',
                'constraint'    => 200,                
            ],
            'username'    => [
                'type'          => 'VARCHAR',
                'constraint'    => 200,                
            ],
            'password'    => [
                'type'          => 'VARCHAR',
                'constraint'    => 200,                
            ],
            'user_type'    => [
                'type'          => 'VARCHAR',
                'constraint'    => 50,                
            ],
            'role_id'    => [
                'type'          => 'INT',
                'constraint'    => 11,                
            ],
            'status'    => [
                'type'          => 'VARCHAR',
                'constraint'    => 50,                
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users', true);
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
