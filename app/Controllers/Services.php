<?php
namespace App\Models;

use CodeIgniter\Model;

class Services extends Model
{
    protected $table = 'bookings';
    protected $primaryKey = 'id';
    protected $allowedFields = ['first_name','surname','email', 'booking_date', 'booking_time', 'phone', 'hairstyle', 'hairstyle_size', 'hairstyle_color', 'optional_services', 'notes', 'total_fee', 'date_created'];
}