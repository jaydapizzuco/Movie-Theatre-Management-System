<?php 
namespace app\models;

use PDO;

class MovieSchedule extends \app\core\Model{
	$schedule_id;
	$movie_id;
	$day;

	public function insert(){
		$SQL = 'INSERT INTO movie_schedule(movie_id,day) VALUES (:movie_id,day)';
		$STMT = self::$_conn->prepare($SQL);
		$data = ['movie_id'=>$this->movie_id,
			'day'=>$this->day];
		$STMT->execute($data);
	}

	public function addAdmin(){
		
	}
 
	public function updateStartTime(){
		
	}

    public function updateDays(){
		
	}
 

}