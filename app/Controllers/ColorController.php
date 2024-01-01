<?php

namespace App\Controllers;

class ColorController extends BaseController
{

    public function __construct(){
        require_once APPPATH.'ThirdParty/ssp.php';
        $this->db = db_connect();
    }

    
    public function createColor(){
        $colorModel = new \App\Models\Color();
        $validation = \Config\Services::validation();
        $this->validate([
            'color'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Color is required'
                ]
            ]
             
        ]);

        if($validation->run() == FALSE){
            $errors = $validation->getErrors();
            echo json_encode(['code'=>0, 'error'=>$errors]);
        }else{
             $data = [
                 'hair_color'=>$this->request->getPost('color'),
             ];
             $query = $colorModel->insert($data);
             if($query){
                 echo json_encode(['code'=>1,'msg'=>'Color added successfully']);

             }else{
                 echo json_encode(['code'=>0,'msg'=>'Something went wrong']);
             }
        }
    }

}