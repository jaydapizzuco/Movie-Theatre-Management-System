<?php 
namespace app\models;

use PDO;

class User extends \app\core\Model {
 public $user_id;
 public $name;
 public $email;
 public $password_hash;
 public $is_admin;

 public function insert(){
		$SQL = 'INSERT INTO user (name, email, password_hash) VALUES (:name, :email, :password_hash)';
		$STMT = self::$_conn->prepare($SQL);
		$data = ['name' => $this->name,
		'email' => $this->email,
		'password_hash' => $this->password_hash];
		$STMT->execute($data);
	}

 public function get($name){
		$SQL = 'SELECT * FROM user WHERE name = :name';
		$STMT = self::$_conn->prepare($SQL);//prepare
		$STMT->execute(['name' => $name]);//run
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\User');//choose the type of return from fetch
		return $STMT->fetch();//fetch
	}

 public function getByEmail($email){
		$SQL = 'SELECT * FROM user WHERE email = :email';
		$STMT = self::$_conn->prepare($SQL);//prepare
		$STMT->execute(['email' => $email]);//run
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\User');//choose the type of return from fetch
		return $STMT->fetch();//fetch
	}


public function getById($user_id){
		$SQL = 'SELECT * FROM user WHERE user_id = :user_id';//define the SQL
		$STMT = self::$_conn->prepare($SQL);//prepare
		$STMT->execute(['user_id' => $user_id]);//run
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\User');//choose the type of return from fetch
		return $STMT->fetch();//fetch
	}

	public function update(){
		$SQL = 'UPDATE user SET name=:name, email=:email, password_hash=:password_hash WHERE user_id=:user_id';
		$STMT = self::$_conn->prepare($SQL);
		$data = ['name' => $this->name,
				'email' => $this->email,
				'password_hash' => $this->password_hash];
		$STMT->execute($data);
	}

	public function isAdmin($user_id){
		$SQL = 'SELECT is_admin FROM user WHERE user_id = :user_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(['user_id' => $user_id]);
		$result = $STMT->fetch(PDO::FETCH_ASSOC); // Fetch as associative array
    	return $result['is_admin'] ?? 0;
	}

	
}