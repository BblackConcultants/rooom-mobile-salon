<?php

namespace App\Controllers;

class SizeController extends BaseController
{

    public function __construct(){
        require_once APPPATH.'ThirdParty/ssp.php';
        $this->db = db_connect();
    }

    
    public function createSize(){
                 
        $sizeModel = new \App\Models\HairstyleSize();
        $validation = \Config\Services::validation();
        $this->validate([
            'hairstyle_size'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Hairstyle Size is required'
                ]
            ]
             
        ]);

        if($validation->run() == FALSE){
            $errors = $validation->getErrors();
            echo json_encode(['code'=>0, 'error'=>$errors]);
        }else{
             $data = [
                 'hairstyle_size'=>$this->request->getPost('hairstyle_size'),
             ];
             $query = $sizeModel->insert($data);
             if($query){
                 echo json_encode(['code'=>1,'msg'=>'Hairstyle Size added successfully']);

             }else{
                 echo json_encode(['code'=>0,'msg'=>'Something went wrong']);
             }
        }
    }

}