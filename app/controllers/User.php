<?php
namespace app\controllers;

class User extends \app\core\Controller{

    function register(){
            //display the form and process the registration
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $user = new \app\models\User();
            //populate the User
            $user->name = $_POST['name'];
             $user->email = $_POST['email'];
            $user->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
            //insert the user
            $user->insert();
            //redirect to a good place
            header('location:/User/login');
        }else{
            $this->view('User/register');
        }
    }


    function login(){
        //show the login form and log the user in
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $email = $_POST['email'];
            $user = new \app\models\User();
            $user = $user->getByEmail($email);
            $password = $_POST['password'];
            if($user && password_verify($password, $user->password_hash)){
                $_SESSION['user_id'] = $user->user_id;

                $this->view('User/profile',$user);
            }else{
                header('location:/User/login');
            }
        }else{
            $this->view('User/login');
        }
    }

     public function index(){

    }


    public function logout(){


    }


    public function  modifyInfo(){


    }
}