<?php 
namespace app\models;

use PDO;

class Ticket extends \app\core\Model {

	public $ticket_id;
	public $order_id;
	public $movie_id;
	public $seat_id;
	public $movie_day;
	public $movie_time;

	public function insert(){
		$SQL = 'INSERT INTO ticket(order_id,movie_id,seat_id,movie_day,movie_time) VALUE (:order_id,:movie_id,:seat_id,:movie_day,:movie_time';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['order_id'=>$this->order_id,
			'movie_id'=>$this->movie_id,
			'seat_id'=>$this->seat_id,
			'movie_day'=>$this->movie_day,
			'movie_time'=>$this->movie_time]
		);
	}

	public function update(){
		
	}

	public function delete(){
		
	}
 
}