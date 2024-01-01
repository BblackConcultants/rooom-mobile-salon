<?php
namespace App\Models;

use CodeIgniter\Model;

class Option extends Model
{
    protected $table = 'optional_services';
    protected $primaryKey = 'id';
    protected $allowedFields = ['optional_service', 'fee'];
}