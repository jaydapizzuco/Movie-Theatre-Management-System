<?php
namespace app\filters;

#[\Attribute]
class Login implements \app\core\AccessFilter{
	
	public function redirected(){
		if(!isset($_SESSION['user_id'])){
			header('location:/User/login');
			return true;
		}
		if($_SESSION['secret']!=NULL){
			$_SESSION['redirect'] = $_SERVER['REQUEST_URI'];
			header('location:/User/check2fa');
			return true;
		}
		return false;
	}
}