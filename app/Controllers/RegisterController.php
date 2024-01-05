<?php

namespace App\Controllers;

class RegisterController extends BaseController
{

    public function __construct(){
        require_once APPPATH.'ThirdParty/ssp.php';
        $this->db = db_connect();
    }

    
    public function registerUser(){
                 
        $userModel = new \App\Models\UserModel();
        $validation = \Config\Services::validation();
        $this->validate([
            'name'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'First name is required'
                ]
            ],
            'surname'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Surname is required'
                ]

            ],
            'email'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Email is required'
                ]

            ],
            'phone'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Phone number is required'
                ]

            ],
            'user_type'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'User Type is required'
                ]

            ],
            'password'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'User Type is required'
                ]

            ],
          
        ]);

        if($validation->run() == FALSE){
            $errors = $validation->getErrors();
            echo json_encode(['code'=>0, 'error'=>$errors]);
        }else{
             $data = [
                 'username'=>$this->request->getPost('username'),
                 'email'=>$this->request->getPost('email'),
                 'phone'=>$this->request->getPost('phone'),
                 'password'=>password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                 'first_name'=>$this->request->getPost('name'),
                 'surname'=>$this->request->getPost('surname'),
                 'user_type'=>$this->request->getPost('user_type'),
                 'status'=>'Pending',
             ];
             $query = $userModel->insert($data);
             if($query){
                 echo json_encode(['code'=>1,'msg'=>'User added successfully']);

             }else{
                 echo json_encode(['code'=>0,'msg'=>'Something went wrong']);
             }
        }
    }

}