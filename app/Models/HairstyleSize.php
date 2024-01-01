<?php
namespace App\Models;

use CodeIgniter\Model;

class HairstyleSize extends Model
{
    protected $table = 'hairstyle_sizes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['hairstyle_size'];
}