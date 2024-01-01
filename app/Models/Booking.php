<?php
namespace App\Models;

use CodeIgniter\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $primaryKey = 'id';
    protected $allowedFields = ['first_name','surname','email', 'booking_date', 'booking_time', 'phone', 'hairstyle', 'hairstyle_size', 'hairstyle_color', 'optional_services', 'notes', 'total_fee', 'date_created'];

    public function get_active(){
        $this->db->from($table);
        $query = $this->db->get();
        $rowcount = $query->num_rows();
        return $rowcount; die();
    }
}