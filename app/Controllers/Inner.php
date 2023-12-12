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
    public function registration()
    {
        $data['title'] = ucfirst('Rooom Mobile Salon User Registration ');
        return view('innerpages/admin/registration', $data);
    }

    public function forgot_password()
    {
        $data['title'] = ucfirst('Rooom Mobile Salon Reset Password ');
        return view('innerpages/admin/forgot_password', $data);
    }

     public function recover_password()
    {
        $data['title'] = ucfirst('Rooom Mobile Salon Recover Password ');
        return view('innerpages/admin/recover_password', $data);
    }
     public function mailbox()
    {
        $data['title'] = ucfirst('Rooom Mobile Salon Mailbox ');
        $data['page_heading'] = ucfirst('Mailbox ');
        return view('innerpages/admin/mailbox', $data);
    }

     
}