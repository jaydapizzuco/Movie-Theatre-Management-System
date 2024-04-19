<?php
namespace app\filters;

#[\Attribute]
class AdminLogin implements \app\core\AccessFilter{

	public function redirected(){
		//make sure that is_admin for the user that is logged in is true
		if(!isset($_SESSION['admin_id'])){
			header('location:/Admin/login');
			return true;
		}
		return false;//not denied
	}

}