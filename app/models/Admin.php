<?php 
namespace app\models;

use PDO;

class Admin extends \app\core\Model {
  
 public $admin_id;
 public $name;
 public $email;
 public $password_hash;

 public function insert(){
		$SQL = 'INSERT INTO admin (name, email, password_hash) VALUES (:name, :email, :password_hash)';
		$STMT = self::$_conn->prepare($SQL);
		$data = ['name' => $this->name,
		'email' => $this->email,
		'password_hash' => $this->password_hash];
		$STMT->execute($data);
	}

 public function get($name){
		$SQL = 'SELECT * FROM admin WHERE name = :name';
		$STMT = self::$_conn->prepare($SQL);//prepare
		$STMT->execute(['name' => $name]);//run
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
		$SQL = 'UPDATE admin SET name = :name, password_hash = :password_hash WHERE admin_id = :admin_id';
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