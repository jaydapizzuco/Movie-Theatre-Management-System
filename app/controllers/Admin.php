<?php
namespace app\controllers;

class Admin extends \app\core\Controller{

    function register(){
            //display the form and process the registration
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $admin = new \app\models\Admin();
            //populate the User
            $admin->name = $_POST['name'];
             $admin->email = $_POST['email'];
            $admin->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
            //insert the user
            $admin->insert();
            //redirect to a good place
            header('location:/Admin/login');
        }else{
            $this->view('Admin/registration');
        }
    }


    function login(){
        //show the login form and log the user in
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $name = $_POST['name'];
            $admin = new \app\models\Admin();
            $admin = $admin->get($name);
            $password = $_POST['password'];
            if($admin && password_verify($password, $admin->password_hash)){
                $_SESSION['admin_id'] = $admin->admin_id;

                header('location:/Admin/profile');
            }else{
                header('location:/Admin/login');
            }
        }else{
            $this->view('Admin/login');
        }
    }

     public function index(){

    }


    public function logout(){


    }


    public function  modifyInfo(){


    }
}