<?php 
namespace app\models;

use PDO;

class About extends \app\core\Model{

	public $about_id;
	public $about_email;
	public $description;

	public function get(){
		$SQL = 'SELECT * FROM about WHERE about_id=1';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\About');
		return $STMT->fetch();
	}

	public function update(){
		$SQL = 'UPDATE about SET about_email=:about_email, description=:description WHERE about_id=:about_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute([
			'about_email'=>$this->about_email,
			'description'=>$this->description,
			'about_id'=>$this->about_id
		]);
	}
}