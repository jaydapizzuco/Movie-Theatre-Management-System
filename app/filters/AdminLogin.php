<?php
namespace app\filters;

#[\Attribute]
class AdminLogin implements \app\core\AccessFilter{

	public function redirected(){
		if(isset($_SESSION['user_id'])){

			$user = new \app\models\User();
			$status = $user->isAdmin($_SESSION['user_id']);

			if($status == 1){
				return true;
			}

			else{
				header('location:/User/profile');
				return false;		
			}
		}
		else{
			header('location:/User/login');
			return false;
		}	
	}


}