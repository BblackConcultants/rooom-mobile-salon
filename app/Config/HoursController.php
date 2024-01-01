<?php

namespace App\Controllers;

class HoursController extends BaseController
{

    public function __construct(){
        require_once APPPATH.'ThirdParty/ssp.php';
        $this->db = db_connect();
    }

    
    public function getAllHours(){
        $working_hours = $this->db->table('working_hours')->get()->getResult();

    }

}