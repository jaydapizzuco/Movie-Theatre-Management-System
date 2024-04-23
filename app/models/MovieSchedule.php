<?php 
namespace app\models;

use PDO;

class MovieSchedule extends \app\core\Model{
	public $schedule_id;
	public $movie_id;
	public $day;

	public function insert(){
		$SQL = 'INSERT INTO movie_schedule (movie_id,day) VALUES (:movie_id,day)';
		$STMT = self::$_conn->prepare($SQL);
		$data = ['movie_id'=>$this->movie_id,
			'day'=>$this->day];
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

	

	public function addAdmin(){
		
	}
 
	public function updateStartTime(){
		
	}

    public function updateDays(){
		
	}
 

}