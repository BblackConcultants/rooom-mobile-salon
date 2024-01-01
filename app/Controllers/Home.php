<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Service as ServicesModel;


class Home extends BaseController {
	private $db;
    
    public function __construct()
        {
            $this->db = db_connect();
        }
	public function index() {
		$data = [];
		$data['title'] 		= 'Room Mobile Salon';
		$data['heading']	= 'Welcome to Rooom Mobile Salon';
		$data['main_content']	= 'home';	
		$services = $this->db->table('services')->get()->getResult();
		$hair_colors = $this->db->table('hair_colors')->get()->getResult();
		$sizes = $this->db->table('hairstyle_sizes')->get()->getResult();
        $data['sizes'] = $sizes;
        $data['services'] = $services;
        $data['hair_colors'] = $hair_colors;
        $optional_services = $this->db->table('optional_services')->get()->getResult();
        $data['optional_services'] = $optional_services;
		echo view('innerpages/template', $data);
	}

	public function about() {
		$data = [];
		$data['title'] 		= 'Room Mobile Salon | About Us';
		$data['heading']	= 'Welcome to Rooom Mobile Salon';
		$data['main_content']	= 'about';	// page name
		echo view('innerpages/template', $data);
	}

	public function gallery() {
		$data = [];
		$data['title'] 		= 'Room Mobile Salon | Gallery';
		$data['heading']	= 'Our Gallery';
		$data['main_content']	= 'gallery';	// page name
		echo view('innerpages/template', $data);
	}
	public function services() {
		$data = [];
		$data['title'] 		= 'Room Mobile Salon | Services';
		$data['heading']	= 'Our services';
		$data['main_content']	= 'services';	// page name
		echo view('innerpages/template', $data);
	}
	public function contact() {
		$data = [];
		$data['title'] 		= 'Room Mobile Salon | Contact Us';
		$data['heading']	= 'Contact Us';
		$data['main_content']	= 'contact';	// page name
		echo view('innerpages/template', $data);
	}
	public function careers() {
		$data = [];
		$data['title'] 		= 'Room Mobile Salon | Careers';
		$data['heading']	= 'Join Us';
		$data['main_content']	= 'careers';	// page name
		echo view('innerpages/template', $data);
	}

	public function rating() {
		$data = [];
		$data['title'] 		= 'Room Mobile Salon | Rate Our Service';
		$data['heading']	= 'Rate Us';
		$data['main_content']	= 'rating';	// page name
		echo view('innerpages/template', $data);
	}

	public function make_booking(){
        $bookingModel = new \App\Models\Booking();
        $validation = \Config\Services::validation();
        $this->validate([
            'name'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Your First Name is required'
                ]
            ],
            'email'=>[
                'rules'=>'required|is_unique[bookings.email]|valid_email',
                'errors'=>[
                    'required'=>'Your Email address is required',
                    'is_unique'=>'This email address already exists'
                ]
            ]
             
        ]);

        if($validation->run() == FALSE){
            $errors = $validation->getErrors();
            echo json_encode(['code'=>0, 'error'=>$errors]);
        }else{
             $data = [
                 'name'=>$this->request->getPost('name'),
                 'surname'=>$this->request->getPost('surname'),
                 'email'=>$this->request->getPost('email'),
                 'booking_date'=>$this->request->getPost('booking_date'),
                 'booking_time'=>$this->request->getPost('booking_time'),
                 'phone'=>$this->request->getPost('phone'),
                 'hairstyle'=>$this->request->getPost('hairstyle'),
                 'hairstyle_size'=>$this->request->getPost('hairstyle-size'),
                 'hairstyle_color'=>$this->request->getPost('hairstyle-color'),
                 'optional_services'=>$this->request->getPost('options'),
                 'notes'=>$this->request->getPost('notes'),
             ];
             $query = $bookingModel->insert($data);
             if($query){
                 echo json_encode(['code'=>1,'msg'=>'Your Booking has been successfully reserved. We wil be contacting you shortly']);
             }else{
                 echo json_encode(['code'=>0,'msg'=>'Something went wrong']);
             }
        }
    }

}