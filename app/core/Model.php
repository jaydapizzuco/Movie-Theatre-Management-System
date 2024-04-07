<?php
namespace app\core;

use PDO;

class Model{
	protected static $_conn = null;
	
	public function __construct(){
		$host = 'localhost';
		$dbname = 'social';
		$user = 'root';
		$pass = '';
		try { 
			if(self::$_conn == null){
				self::$_conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
				self::$_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
		} catch(PDOException $e) {
			echo $e->getMessage();
		}
	}
}