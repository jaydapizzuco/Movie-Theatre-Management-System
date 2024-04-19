<?php
namespace app\filters;

#[\Attribute]
class AdminLogin implements \app\core\AccessFilter{

	public function redirected(){
		//make sure that the admin is logged in
		if(!isset($_SESSION['admin_id'])){
			header('location:/Admin/login');
			return true;
		}
		return false;//not denied
	}

}