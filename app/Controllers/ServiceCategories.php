<?php
namespace App\Models;

use CodeIgniter\Model;

class ServiceCategories extends Model
{
    protected $table = 'service_category';
    protected $primaryKey = 'id';
    protected $allowedFields = ['category'];

    public function get_all(){

        $this->db->select("*");
        $result = $this->db->get('service_category');
        return $result->result_array ();
    }
}