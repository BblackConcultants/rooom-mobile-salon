<?php

namespace App\Controllers;

class UserTypeController extends BaseController
{

    public function __construct(){
        require_once APPPATH.'ThirdParty/ssp.php';
        $this->db = db_connect();
    }

    
    public function createUserType(){
                 
        $userTypeModel = new \App\Models\UserType();
        $validation = \Config\Services::validation();
        $this->validate([
            'user_type'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'User Type is required'
                ]
            ]
             
        ]);

        if($validation->run() == FALSE){
            $errors = $validation->getErrors();
            echo json_encode(['code'=>0, 'error'=>$errors]);
        }else{
             $data = [
                 'user_type'=>$this->request->getPost('user_type'),
                 'fee'=>$this->request->getPost('fee'),
             ];
             $query = $userTypeModel->insert($data);
             if($query){
                 echo json_encode(['code'=>1,'msg'=>'User Type added successfully']);

             }else{
                 echo json_encode(['code'=>0,'msg'=>'Something went wrong']);
             }
        }
    }

}