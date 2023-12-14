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

      public function compose()
    {
        $data['title'] = ucfirst('Rooom Mobile Salon Compose Message ');
        $data['page_heading'] = ucfirst('Compose');
        return view('innerpages/admin/compose', $data);
    }

      public function read_message()
    {
        $data['title'] = ucfirst('Rooom Mobile Salon Read Message ');
        $data['page_heading'] = ucfirst('Message Details');
        return view('innerpages/admin/read_message', $data);
    }

     public function active_bookings()
    {
        $data['title'] = ucfirst('Rooom Mobile Salon Active Bookings ');
        $data['page_heading'] = ucfirst('Active Bookings');
        return view('innerpages/admin/active_bookings', $data);
    }
    public function booking_calendar()
    {
        $data['title'] = ucfirst('Rooom Mobile Salon Booking Calendar ');
        $data['page_heading'] = ucfirst('Booking Calendar');
        return view('innerpages/admin/booking_calendar', $data);
    }

    public function view_booking()
    {
        $data['title'] = ucfirst('Rooom Mobile Salon View Booking ');
        $data['page_heading'] = ucfirst('Booking Details');
        return view('innerpages/admin/view_booking', $data);
    }

     
}