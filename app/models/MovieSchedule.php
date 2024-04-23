<?php 
namespace app\models;

use PDO;

class MovieSchedule extends \app\core\Model{
	public $schedule_id;
	public $movie_id;
	public $day;
	public $time_id;

	public function insert(){
		$SQL = 'INSERT INTO movie_schedule (movie_id,day,time_id) VALUES (:movie_id,:day,:time_id)';
		$STMT = self::$_conn->prepare($SQL);
		$data = ['movie_id'=>$this->movie_id,
			'day'=>$this->day,
			'time_id'=>$this->time_id];
		$STMT->execute($data);
	}

	public function delete($schedule_id){
		$SQL = 'DELETE FROM movie_schedule WHERE schedule_id=:schedule_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['schedule_id'=>$schedule_id]
		);
	}

	public function deleteAfterMovie($movie_id){
		$SQL = 'DELETE FROM movie_schedule WHERE movie_id=:movie_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['movie_id'=>$movie_id]
		);
	}

	public function getById($schedule_id){
		$SQL = 'SELECT * FROM movie_schedule WHERE schedule_id=:schedule_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['schedule_id'=>$schedule_id]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\MovieSchedule');
		return $STMT->fetch();
	}

	public function getByMovieID($movie_id){
		$SQL = 'SELECT * FROM movie_schedule WHERE movie_id=:movie_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['movie_id'=>$movie_id]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\MovieSchedule');
		return $STMT->fetchAll();
	}

	public function getByMovieIDAndDay($movie_id, $day){
		$SQL = 'SELECT * FROM movie_schedule WHERE movie_id=:movie_id AND day=:day';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['movie_id'=>$movie_id,
			'day'=>$day]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\MovieSchedule');
		return $STMT->fetchAll();
	}
}