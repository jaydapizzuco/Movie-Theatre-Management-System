<?php 
namespace app\models;

use PDO;

class Admin extends \app\core\Model {
  
 public $admin_id;
 public $username;
 public $email;
 public $password_hash;

 public function insert(){
		$SQL = 'INSERT INTO admin (username, email, password_hash) VALUES (:username, :email, :password_hash)';
		$STMT = self::$_conn->prepare($SQL);
		$data = ['username' => $this->username,
		'email' => $this->email,
		'password_hash' => $this->password_hash];
		$STMT->execute($data);
	}

 public function get($username){
		$SQL = 'SELECT * FROM admin WHERE username = :username';
		$STMT = self::$_conn->prepare($SQL);//prepare
		$STMT->execute(['username' => $username]);//run
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Admin');//choose the type of return from fetch
		return $STMT->fetch();//fetch
	}

public function getById($admin_id){
		$SQL = 'SELECT * FROM admin WHERE admin_id = :admin_id';//define the SQL
		$STMT = self::$_conn->prepare($SQL);//prepare
		$STMT->execute(['admin_id' => $admin_id]);//run
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Admin');//choose the type of return from fetch
		return $STMT->fetch();//fetch
	}

	public function update(){
		$SQL = 'UPDATE admin SET username = :username, password_hash = :password_hash WHERE admin_id = :admin_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute((array)$this);
	}



	public function addMovie(){
		
	}
 
	public function removeMovie(){
		
	}

    public function approveReview(){
		
	}

}