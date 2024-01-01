<?php

namespace App\Controllers;

class OptionsController extends BaseController
{

    public function __construct(){
        require_once APPPATH.'ThirdParty/ssp.php';
        $this->db = db_connect();
    }

    
    public function createOption(){
                 
        $optionModal = new \App\Models\Option();
        $validation = \Config\Services::validation();
        $this->validate([
            'optional_service'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Optional service is required'
                ]
            ],
            'fee'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Optional service fee is required'
                ]
            ]
             
        ]);

        if($validation->run() == FALSE){
            $errors = $validation->getErrors();
            echo json_encode(['code'=>0, 'error'=>$errors]);
        }else{
             $data = [
                 'optional_service'=>$this->request->getPost('optional_service'),
                 'fee'=>$this->request->getPost('fee'),
             ];
             $query = $optionModal->insert($data);
             if($query){
                 echo json_encode(['code'=>1,'msg'=>'Optional service added successfully']);

             }else{
                 echo json_encode(['code'=>0,'msg'=>'Something went wrong']);
             }
        }
    }

}