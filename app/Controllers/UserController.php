<?php

namespace App\Controllers;

class UserController extends BaseController
{

    public function __construct(){
        require_once APPPATH.'ThirdParty/ssp.php';
        $this->db = db_connect();
    }

    
    public function createUser(){
                 
        $userModel = new \App\Models\User();
        $validation = \Config\Services::validation();
        $this->validate([
            'first_name'=>[
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
            'username'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Username is required'
                ]

            ],
            'user_type'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'User type is required'
                ]

            ],
        ]);

        if($validation->run() == FALSE){
            $errors = $validation->getErrors();
            echo json_encode(['code'=>0, 'error'=>$errors]);
        }else{
             $data = [
                 'first_name'=>$this->request->getPost('first_name'),
                 'surname'=>$this->request->getPost('surname'),
                 'username'=>$this->request->getPost('username'),
                 'user_type'=>$this->request->getPost('user_type'),
                 'status'=>'Active',
             ];
             $query = $userModel->insert($data);
             if($query){
                 echo json_encode(['code'=>1,'msg'=>'User added successfully']);

             }else{
                 echo json_encode(['code'=>0,'msg'=>'Something went wrong']);
             }
        }
    }

    public function approveUser() {

        $userModel = new \App\Models\User();
        $data = array(
            'status' => 'Active',
        );
        $query = $userModel->update_user(array('id' => $this->request->getPost('user_id')), $data);
         
         if($query){
             echo json_encode(['code'=>1,'msg'=>'User has been approved']);

         }else{
             echo json_encode(['code'=>0,'msg'=>'Something went wrong']);
         }
    }

     public function disapproveUser() {

        $userModel = new \App\Models\User();
        $data = array(
            'status' => 'Disapproved',
        );
        $query = $userModel->update_user(array('id' => $this->request->getPost('user_id')), $data);
         
         if($query){
             echo json_encode(['code'=>1,'msg'=>'User has been disapproved']);

         }else{
             echo json_encode(['code'=>0,'msg'=>'Something went wrong']);
         }
    }
}