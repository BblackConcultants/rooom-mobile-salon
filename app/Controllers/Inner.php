<?php

namespace App\Controllers;
use CodeIgniter\Exceptions\PageNotFoundException;

class Inner extends BaseController
{
      public function login()
    {
        $data['title'] = ucfirst('Rooom Mobile Salon Login ');
        return view('innerpages/login', $data);
    }

    public function dashboard()
    {
        $data['title'] = ucfirst('Rooom Mobile Salon Dashboard ');
        return view('innerpages/admin/dashboard', $data);
    }
     
}