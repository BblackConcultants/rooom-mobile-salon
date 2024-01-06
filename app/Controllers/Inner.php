<?php

namespace App\Controllers;
use CodeIgniter\Exceptions\PageNotFoundException;
use App\Models\ServiceCategories as CategoriesModel;
use App\Models\Color as ColorsModel;
use App\Models\Booking;
use App\Models\UserModel;



class Inner extends BaseController
{

    private $db;
    
    public function __construct()
        {
            $this->db = db_connect();
        }

      public function login()
    {
        $data['title'] = ucfirst('Rooom Mobile Salon Login ');
        return view('innerpages/login', $data);
    }

    public function dashboard()
    {       
        $session = session();
        $service_categories = $this->db->table('service_category')->get()->getResult();
        $data['service_categories'] = $service_categories;
        $data['page_heading'] = ucfirst('Rooom Mobile Salon Dashboard ');
        $data['title'] = ucfirst($session->get('username').'\'s Dashboard ');
        return view('innerpages/admin/dashboard', $data);
    }
    public function registration()
    {
        $user_types = $this->db->table('user_types')->get()->getResult();
        $data['user_types'] = $user_types;
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

      public function working_hours()
    {
        $colors = $this->db->table('hair_colors')->get()->getResult();
        $data['colors'] = $colors;
        $data['title'] = ucfirst('Rooom Mobile Working Hours ');
        $data['page_heading'] = ucfirst('Working Hours');
        $sizes = $this->db->table('hairstyle_sizes')->get()->getResult();
        $data['sizes'] = $sizes;
        $optional_services = $this->db->table('optional_services')->get()->getResult();
        $data['optional_services'] = $optional_services;
        $working_hours = $this->db->table('working_hours')->get()->getResult();
        $data['working_hours'] = $working_hours;
        return view('innerpages/admin/working_hours', $data);
    }

      public function compose()
    {
        $data['title'] = ucfirst('Rooom Mobile Salon Compose Message ');
        $data['page_heading'] = ucfirst('Compose');
        return view('innerpages/admin/compose', $data);
    }

      public function add_hairstyle_color()
    {
        $data['title'] = ucfirst('Rooom Mobile Salon Add Hairstyle Color ');
        $data['page_heading'] = ucfirst('Hairstyle Colors');
        $colors = $this->db->table('hair_colors')->get()->getResult();
        $data['colors'] = $colors;
        return view('innerpages/admin/add_hairstyle_color', $data);
    }
       public function add_user_type()
    {
        $data['page_heading'] = ucfirst('Rooom Mobile Salon Add System User Type');
        $data['title'] = ucfirst('Add System User Type');
        $user_types = $this->db->table('user_types')->get()->getResult();
        $data['user_types'] = $user_types;
        return view('innerpages/admin/add_user_type', $data);
    }

       public function add_service_category()
    {
        $data['page_heading'] = ucfirst('Rooom Mobile Salon Add Service Category');
        $data['title'] = ucfirst('Add Service Category');
        $service_categories = $this->db->table('service_category')->get()->getResult();
        $data['service_categories'] = $service_categories;
        return view('innerpages/admin/add_service_category', $data);
    }

      public function add_hairstyle_size()
    {
        $data['title'] = ucfirst('Rooom Mobile Salon Add Hairstyle Size ');
        $data['page_heading'] = ucfirst('Hairstyle Size');
        $sizes = $this->db->table('hairstyle_sizes')->get()->getResult();
        $data['sizes'] = $sizes;
        return view('innerpages/admin/add_hairstyle_size', $data);
    }

       public function add_hairstyle_options()
    {
        $data['title'] = ucfirst('Rooom Mobile Salon Add Hairstyle Options ');
        $data['page_heading'] = ucfirst('Hairstyle Options');
        $options = $this->db->table('optional_services')->get()->getResult();
        $data['options'] = $options;
        return view('innerpages/admin/add_hairstyle_options', $data);
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
     public function hairstyles()
    {
        $hairstyles = $this->db->table('services')
                     ->where('service_category', 'Hairstyles')->get()->getResult();
        $data['hairstyles'] = $hairstyles;
        $data['page_heading'] = ucfirst('Rooom Mobile Salon Hairstyle Listing');
        $data['title'] = ucfirst('Hairstyle Listing');
        $data['button_text'] = ucfirst('Hairstyle');
        return view('innerpages/admin/hairstyles', $data);
    }

     public function nails()
    {
        $nails = $this->db->table('services')
                     ->where('service_category', 'Nails')->get()->getResult();
        $data['nails'] = $nails;
        $data['page_heading'] = ucfirst('Rooom Mobile Salon Hairstyle Listing');
        $data['title'] = ucfirst('Nails Listing');
        $data['button_text'] = ucfirst('Hairstyle');
        return view('innerpages/admin/nails', $data);
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
        
        $services = $this->db->table('services')->get()->getResult();
        $data['services'] = $services;
        $data['title'] = ucfirst('Rooom Mobile Salon Services Listing');
        $data['page_heading'] = ucfirst('Services Listing');
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
        $serviceCatModel = new \App\Models\ServiceCategories();
        $data['title'] = ucfirst('Add New Service');
        $data['page_heading'] = ucfirst('Rooom Mobile Salon | Create Service');

        // get all the service types
        $service_categories = $this->db->table('service_category')->get()->getResult();
        $data['service_categories'] = $service_categories;

        // get all the services
        $services = $this->db->table('services')->get()->getResult();
        $data['services'] = $services;

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
        
        $bookingModel = new Booking();
        $data['all_bookings'] = $bookingModel->findAll();
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
        
        $data['title'] = ucfirst('User User Listing');
        $data['page_heading'] = ucfirst('Rooom Mobile Salon User Management');
        $users = $this->db->table('users')->get()->getResult();
        $data['users'] = $users;
        return view('innerpages/admin/user_management', $data);
    }
        public function new_user()
    {
        $data['title'] = ucfirst('User Management');
        $data['page_heading'] = ucfirst('Register New System User');
        $user_types = $this->db->table('user_types')->get()->getResult();
        $data['user_types'] = $user_types;
        return view('innerpages/admin/new_user', $data);
    }
   
         public function view_user()
    {

        $session = session();
        $userModel = new UserModel();
        $conditions = array('id' => $this->request->getVar('id'), );
        $user_details = $userModel->where($conditions)->first();
        $subject_data = [
            'sub_id' => $user_details['id'],
            'sub_username' => $user_details['username'],
            'sub_name' => $user_details['first_name'],
            'sub_surname' => $user_details['surname'],
            'sub_user_type' => $user_details['user_type'],
            'sub_email' => $user_details['email'],
            'sub_phone' => $user_details['phone'],
            'sub_status' => $user_details['status'],
            'created_at' => $user_details['created_at'],
            'isLoggedIn' => TRUE
        ];
        $session->set($subject_data);
        $data['title'] = ucfirst('User Management');
        $data['page_heading'] = ucfirst('User Details');
        return view('innerpages/admin/user_details', $data);
    }
          public function user_roles()
    {
        $data['title'] = ucfirst('User Management');
        $data['page_heading'] = ucfirst('Manage User Privilleges');
        return view('innerpages/admin/user_roles', $data);
    }
           public function logout()
    {
        $session = session();
        $user_data = $session->get();
        foreach ($user_data as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $session->remove($key);
            }
        }
        $session->destroy();
        return redirect()->to('login');
        
    }
}