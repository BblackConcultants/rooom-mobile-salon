<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Home extends BaseController {

	public function index() {
		$data = [];
		$data['title'] 		= 'Room Mobile Salon';
		$data['heading']	= 'Welcome to Rooom Mobile Salon';
		$data['main_content']	= 'home';	// page name
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

}