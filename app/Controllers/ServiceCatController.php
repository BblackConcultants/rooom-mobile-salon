<?php

namespace App\Controllers;

class ServiceCatController extends BaseController
{

    public function __construct(){
        require_once APPPATH.'ThirdParty/ssp.php';
        $this->db = db_connect();
    }

    
    public function createServiceCat(){
                 
        $categoriesModel = new \App\Models\ServiceCategories();
        $validation = \Config\Services::validation();
        $this->validate([
            'service_cat'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Service category is required'
                ]
            ],
        ]);

        if($validation->run() == FALSE){
            $errors = $validation->getErrors();
            echo json_encode(['code'=>0, 'error'=>$errors]);
        }else{
             $data = [
                 'category'=>$this->request->getPost('service_cat'),
                 
             ];
             $query = $categoriesModel->insert($data);
             if($query){
                 echo json_encode(['code'=>1,'msg'=>'Service category added successfully']);

             }else{
                 echo json_encode(['code'=>0,'msg'=>'Something went wrong']);
             }
        }
    }

}