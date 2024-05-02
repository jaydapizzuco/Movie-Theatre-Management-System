<?php
namespace app\controllers;

use chillerlan\Authenticator\{Authenticator, AuthenticatorOptions};
use chillerlan\QRCode\QRCode;

class User extends \app\core\Controller{

    function register(){
        //display the form and process the registration
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $user = new \app\models\User();
            //populate the User
            $user->name = $_POST['name'];
             $user->email = $_POST['email'];
             $status = $_GET['admin'];
             if($_POST['password'] != $_POST['confirmpassword']){
                 echo '<script type="text/javascript">

                 alert("The passwords you have entered do not match.Please try again."); 

                </script>';

                $this->view('User/register');
             }
             else if ($_POST['password'] == $_POST['confirmpassword']){
                $user->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                    //insert the user
                    $user->insert();

                    //redirect to a good place
                    header('location:/User/login');
             }
            
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
                $_SESSION['secret'] = $user->secret;
//                $this->setup2fa();

                if ($user->isAdmin($user->user_id) == 1) {
                    $this->view('User/adminProfile', $user);
                } else {
                    $this->view('User/profile', $user);
                }

            }else{
                header('location:/User/login');
            }
        }else{
            $this->view('User/login');
        }
    }

    #[\app\filters\Login] 
    #[\app\filters\AdminLogin] 
     public function adminProfile(){
        $profile = new \app\models\User();
        $profile = $profile->getById($_SESSION['user_id']);
        $this->view('User/adminProfile',$profile);
    }

     #[\app\filters\Login] 
     public function profile(){
        $profile = new \app\models\User();
        $profile = $profile->getById($_SESSION['user_id']);
        $this->view('User/profile',$profile);
    }

    function logout(){
        session_destroy();
        $_SESSION['user_id'] = null;
        header('location:/User/login');
    }


    public function  modifyInfo(){
        if(!isset($_SESSION['user_id'])){
            header('location:/User/login');
            return;
        }

        $user = new \app\models\User();
        $user = $user->getById($_SESSION['user_id']);

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $user->name = $_POST['name'];
            $password = $_POST['password'];
            
            if(!empty($password)){
                $user->password_hash = password_hash($password, PASSWORD_DEFAULT);
            }
            $user->update();
            header('location:/User/profile');
        }
        else{
            $this->view('User/update', $user);
        }

    }


    public function adminReviews() {
        $reviewModel = new \app\models\Review();
        $reviews = $reviewModel->getAllDisapproved(); 

        
        $this->view('User/adminReviews', ['reviews' => $reviews]);
    }

    public function purchaseHistory(){
        $userOrders = new \app\models\Order();
        $userOrders = $userOrders->getByUserID($_SESSION['user_id']);

        $this->view('User/purchaseHistory', $userOrders);
    }

    function setup2fa(){
        $options = new AuthenticatorOptions();
        $authenticator = new Authenticator($options);

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(isset($_SESSION['secret_setup'])){
                $authenticator->setSecret($_SESSION['secret_setup']);
            }else{
                header('location:/User/setup2fa');
            }
            //was submitted, check the TOTP
            $totp = $_POST['totp'];
            if($authenticator->verify($totp)){
                //record to the user record
                $user = new \app\models\User();
                $user = $user->getById($_SESSION['user_id']);
                $user->secret=$_SESSION['secret_setup'];
                $user->add2FA();
                header('location:/User/profile');
            }else{
                header('location:/User/login');
            }
        }else{
            $_SESSION['secret_setup'] = $authenticator->createSecret();
            //generate the URI with the secret for the user
            $uri = $authenticator->getUri($_SESSION['user_id'], 'localhost');
            $QRCode = (new QRCode)->render($uri);
//var_dump($QRCode);
            $this->view('User/setup2fa',$QRCode);
        }
    }

    function check2fa(){
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $options = new AuthenticatorOptions();
        $authenticator = new Authenticator($options);
        $authenticator->setSecret($_SESSION['secret']);
        if($authenticator->verify($_POST['totp'])){
            unset($_SESSION['secret']);
            header('location:' . $_SESSION['redirect']);//the good place
        }else{
            session_destroy();
            header('location:/User/login');
        }
    }else{
        $this->view('User/check2fa');
    }
}
}