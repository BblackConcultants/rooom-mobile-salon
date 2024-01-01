<?php
namespace App\Models;

use CodeIgniter\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'id';
    protected $allowedFields = ['service_category','service_name','parent_service', 'description', 'status', 'average_duration', 'notes', 'fee'];
}