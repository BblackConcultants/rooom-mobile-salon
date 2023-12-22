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

    public function historical_bookings()
    {
        $data['title'] = ucfirst('Rooom Mobile Salon Historical Bookings ');
        $data['page_heading'] = ucfirst('Historical Booking List');
        return view('innerpages/admin/historical_bookings', $data);
    }

    public function historical_booking_details()
    {
        $data['title'] = ucfirst('Rooom Mobile Salon Historical Booking Details');
        $data['page_heading'] = ucfirst('Historical Booking Details');
        return view('innerpages/admin/historical_booking_details', $data);
    }

    public function clients()
    {
        $data['title'] = ucfirst('Rooom Mobile Salon Clients Listing');
        $data['page_heading'] = ucfirst('Clients Listing');
        return view('innerpages/admin/clients', $data);
    }

     public function client_details()
    {
        $data['title'] = ucfirst('Rooom Mobile Salon Client Details');
        $data['page_heading'] = ucfirst('Client Details');
        return view('innerpages/admin/client_details', $data);
    }

     public function hairdressers()
    {
        $data['title'] = ucfirst('Rooom Mobile Salon Hairdresser Listing');
        $data['page_heading'] = ucfirst('Hairdresser Listing');
        $data['button_text'] = ucfirst('Hairdresser');
        return view('innerpages/admin/hairdressers', $data);
    }

    public function hairdresser_details()
    {
        $data['title'] = ucfirst('Rooom Mobile Salon Hairdresser Details');
        $data['page_heading'] = ucfirst('Hairdresser Details');
        $data['button_text'] = ucfirst('Hairdresser');
        return view('innerpages/admin/hairdresser_details', $data);
    }

     public function administrators()
    {
        $data['title'] = ucfirst('Rooom Mobile Salon Administrator Listing');
        $data['page_heading'] = ucfirst('Administrator Listing');
        $data['button_text'] = ucfirst('Administrator');
        return view('innerpages/admin/administrators', $data);
    }

     public function administrator_details()
    {
        $data['title'] = ucfirst('Rooom Mobile Salon Administrator Details');
        $data['page_heading'] = ucfirst('Administrator Details');
        $data['button_text'] = ucfirst('Administrator');
        return view('innerpages/admin/administrator_details', $data);
    }

     public function hairdresser_services()
    {
        $data['title'] = ucfirst('Rooom Mobile Salon Hairdresser Services Listing');
        $data['page_heading'] = ucfirst('Hairdresser Services Listing');
        $data['button_text'] = ucfirst('Hairdresser');
        return view('innerpages/admin/hairdresser_services', $data);
    }

     public function service_details()
    {
        $data['title'] = ucfirst('Rooom Mobile Salon Hairdresser Services Details');
        $data['page_heading'] = ucfirst('Hairdresser Services Details');
        $data['button_text'] = ucfirst('Hairdresser');
        return view('innerpages/admin/service_details', $data);
    }

     public function nail_services()
    {
        $data['title'] = ucfirst('Rooom Mobile Salon Nail Services Listing');
        $data['page_heading'] = ucfirst('Nail Services Listing');
        $data['button_text'] = ucfirst('Nail Technician');
        return view('innerpages/admin/nail_services', $data);
    }

     public function nail_service_details()
    {
        $data['title'] = ucfirst('Rooom Mobile Salon Nail Services Details');
        $data['page_heading'] = ucfirst('Nail Services Details');
        $data['button_text'] = ucfirst('Nail Technician');
        return view('innerpages/admin/nail_service_details', $data);
    }

    public function profile()
    {
        $data['title'] = ucfirst('Profile Details');
        $data['page_heading'] = ucfirst('My Profile');
        return view('innerpages/admin/profile', $data);
    }


    public function active_clients()
    {
        $data['title'] = ucfirst('My Active Clients');
        $data['page_heading'] = ucfirst('My Active Clients');
        return view('innerpages/admin/active_clients', $data);
    }

    public function new_service()
    {
        $data['title'] = ucfirst('Add New Service');
        $data['page_heading'] = ucfirst('New Service Details');
        return view('innerpages/admin/new_service', $data);
    }

    public function booking_details()
    {
        $data['title'] = ucfirst('Booking Details');
        $data['page_heading'] = ucfirst('Booking Details');
        return view('innerpages/admin/booking_details', $data);
    }
     public function historical_clients()
    {
        $data['title'] = ucfirst('My Historical Clients');
        $data['page_heading'] = ucfirst('Historical Clients');
        return view('innerpages/admin/historical_clients', $data);
    }

       public function historical_client_details()
    {
        $data['title'] = ucfirst('My Historical Client Details');
        $data['page_heading'] = ucfirst('View Historical Client Reviews');
        return view('innerpages/admin/historical_client_details', $data);
    }

       public function hairdresser_availability()
    {
        $data['title'] = ucfirst('Hairdresser Booking Calendar');
        $data['page_heading'] = ucfirst('Booking Calendar');
        return view('innerpages/admin/hairdresser_availability', $data);
    }

        public function booking_processing()
    {
        $data['title'] = ucfirst('Bookings In Progress');
        $data['page_heading'] = ucfirst('Bookings Being Processed');
        return view('innerpages/admin/booking_processing', $data);
    }

         public function booking_process()
    {
        $data['title'] = ucfirst('View Booking Progress');
        $data['page_heading'] = ucfirst('Bookings Progress');
        return view('innerpages/admin/booking_process', $data);
    }
         public function user_management()
    {
        $data['title'] = ucfirst('User Management');
        $data['page_heading'] = ucfirst('User Listing');
        return view('innerpages/admin/user_management', $data);
    }
        public function new_user()
    {
        $data['title'] = ucfirst('User Management');
        $data['page_heading'] = ucfirst('Register New System User');
        return view('innerpages/admin/new_user', $data);
    }

}