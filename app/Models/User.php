<?php
namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['first_name', 'surname', 'username', 'user_type', 'status'];

    public function update_user($where, $data) {
       $this->db->table($this->table)->update($data, $where);
       // print_r($this->db->getLastQuery());
        return $this->db->affectedRows();
    }
}