<?php
namespace App\Models;

use CodeIgniter\Model;

class Color extends Model
{
    protected $table = 'hair_colors ';
    protected $primaryKey = 'id';
    protected $allowedFields = ['hair_color'];
}