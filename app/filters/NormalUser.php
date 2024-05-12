<?php
namespace app\filters;

#[\Attribute]
class NormalUser implements \app\core\AccessFilter{

	public function redirected(){
		if(isset($_SESSION['user_id'])){

			$user = new \app\models\User();
			$status = $user->isAdmin($_SESSION['user_id']);
			
			if($status == 0){
				return false;
			}

			else{
				header("location: " . $_SERVER['HTTP_REFERER']);
				return true;		
			}
		}
		else{
			header('location:/User/login');
			return true;
		}	
	}
}