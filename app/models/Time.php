<?php 
namespace app\models;

use PDO;

class Times extends \app\core\Model{

	public $time_id;
	public $time;

	public function getAll(){
		$SQL = 'SELECT * FROM times ORDER BY time';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Times');
		return $STMT->fetchAll();
	}

	public function getByID($time_id){
		$SQL = 'SELECT * FROM times WHERE time_id=:time_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['time_id'=>$time_id]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Times');
		return $STMT->fetch();
	}
	
	public function getBySchedule($time){
		$SQL = 'SELECT * FROM times WHERE time=:time';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['time'=>$time]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Times');
		return $STMT->fetch();
	}
}