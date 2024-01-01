<?php

namespace App\Controllers;

class ServiceController extends BaseController
{

    public function __construct(){
        require_once APPPATH.'ThirdParty/ssp.php';
        $this->db = db_connect();
    }

    
    public function createService(){
        $serviceModel = new \App\Models\Service();
        $validation = \Config\Services::validation();
        $this->validate([
            'service_name'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Service Name is required'
                ]
            ]
             
        ]);

        if($validation->run() == FALSE){
            $errors = $validation->getErrors();
            echo json_encode(['code'=>0, 'error'=>$errors]);
        }else{
             $data = [
                 'service_category'=>$this->request->getPost('service_type'),
                 'service_name'=>$this->request->getPost('service_name'),
                 'parent_service'=>$this->request->getPost('parent_service'),
                 'description'=>$this->request->getPost('desc'),
                 'status'=>$this->request->getPost('status'),
                 'average_duration'=>$this->request->getPost('avg_duration'),
                 'notes'=>$this->request->getPost('notes'),
                 'fee'=>$this->request->getPost('fee'),
             ];
             $query = $serviceModel->insert($data);
             if($query){
                 echo json_encode(['code'=>1,'msg'=>'Service added successfully']);

             }else{
                 echo json_encode(['code'=>0,'msg'=>'Something went wrong']);
             }
        }
    }

}