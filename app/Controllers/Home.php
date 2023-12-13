<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Home extends BaseController {

	public function index() {
		$data = [];
		$data['title'] 		= 'Page Title';
		$data['heading']	= 'Welcome to Rooom Mobile Salon';
		$data['main_content']	= 'home';	// page name
		echo view('innerpages/template', $data);
	}

}