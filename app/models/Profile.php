<?php
namespace app\models;

use PDO;

class Profile extends \app\core\Model{
	public $profile_id;
	public $user_id;
	public $name;

	//CRUD

	//create
	public function insert(){
		$SQL = 'INSERT INTO profile(user_id,name) VALUE (:user_id,:name)';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['user_id'=>$this->user_id,
			'name'=>$this->name,
			]
		);
	}

	//read
	public function getForUser($user_id){
		$SQL = 'SELECT * FROM profile WHERE user_id = :user_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['user_id'=>$user_id]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\profile');//set the type of data returned by fetches
		return $STMT->fetch();//return (what should be) the only record
	}

	public function getByID($profile_id){
		$SQL = 'SELECT * FROM profile WHERE profile_id = :profile_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['profile_id'=>$profile_id]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Profile');
		return $STMT->fetch();
	}

	public function getAll(){
		$SQL = 'SELECT * FROM profile';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Profile');//set the type of data returned by fetches
		return $STMT->fetchAll();//return all records
	}

	public function getByName($name){//search
		$SQL = 'SELECT * FROM profile WHERE name = :name';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['name'=>$name]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Profile');//set the type of data returned by fetches
		return $STMT->fetchAll();//return all records
	}

	//update
	//you can't change the user_id that's a business logic choice that gets implemented in the model
	public function update(){
		$SQL = 'UPDATE profile SET name=:name, WHERE profile_id = :profile_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['profile_id'=>$this->profile_id,
			'name'=>$this->name,
			]
		);
	}

	//delete
	public function delete(){
		$SQL = 'DELETE FROM profile WHERE profile_id = :profile_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['profile_id'=>$this->profile_id]
		);
	}


}