<?php
namespace app\controllers;

class User extends \app\core\Controller{


   public function login(){
        //show the login form and log the user in
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $username = $_POST['username'];
            $user = new \app\models\User();
            $user = $user->get($username);
            $password = $_POST['password'];
            if($user && password_verify($password, $user->password_hash)){
                $_SESSION['user_id'] = $user->user_id;

                header('location:/Profile/userIndex');
            }else{
                header('location:/User/login');
            }
        }else{
            $this->view('User/login');
        }
    }

    public function logout(){

    }
    

    public function register(){
        //display the form and process the registration
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $user = new \app\models\user();
            //populate the User
            $user->username = $_POST['username'];
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

    public function deleteAccount(){

    }


    public function ModifyInfo(){


    }
}