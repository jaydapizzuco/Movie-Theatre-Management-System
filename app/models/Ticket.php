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
		$SQL = 'INSERT INTO ticket(order_id, movie_id, seat_id, movie_day, movie_time) VALUES (:order_id,:movie_id,:seat_id,:movie_day,:movie_time)';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(['order_id'=>$this->order_id,
			'movie_id'=>$this->movie_id,
			'seat_id'=>$this->seat_id,
			'movie_day'=>$this->movie_day,
			'movie_time'=>$this->movie_time]);
	}

	public function delete($order_id){
		$SQL = 'DELETE FROM review WHERE order_id=:order_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['order_id'=>$order_id]
		);
	}

	public function getByID($ticket_id){
		$SQL = 'SELECT * FROM ticket WHERE ticket_id=:ticket_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['ticket_id'=>$ticket_id]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Ticket');
		return $STMT->fetch();
	}

	public function getByMovieID($movie_id){
		$SQL = 'SELECT * FROM movie WHERE movie_id=:movie_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['movie_id'=>$movie_id]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Ticket');
		return $STMT->fetchAll();
	}

	public function getByOrderID($order_id){
		$SQL = 'SELECT * FROM movie WHERE order_id=:order_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['order_id'=>$order_id]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Ticket');
		return $STMT->fetchAll();
	}
 
}