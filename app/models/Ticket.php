<?php 
namespace app\models;

use PDO;

class Ticket extends \app\core\Model {

	public $ticket_id;
	public $order_id;
	public $movie_id;
	public $seat_id;
	public $movie_date;
	public $movie_day;
	public $movie_time;
	public $ticket_status;

	public function insert(){
		$SQL = 'INSERT INTO ticket(order_id, movie_id, seat_id, movie_date, movie_day, movie_time) VALUES (:order_id,:movie_id,:seat_id,:movie_date,:movie_day,:movie_time)';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(['order_id'=>$this->order_id,
			'movie_id'=>$this->movie_id,
			'seat_id'=>$this->seat_id,
			'movie_date'=>$this->movie_date,
			'movie_day'=>$this->movie_day,
			'movie_time'=>$this->movie_time]);
	}

	public function delete($order_id){
		$SQL = 'DELETE FROM ticket WHERE order_id=:order_id';
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
		$SQL = 'SELECT * FROM ticket WHERE movie_id=:movie_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['movie_id'=>$movie_id]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Ticket');
		return $STMT->fetchAll();
	}

	public function getByOrderID($order_id){
		$SQL = 'SELECT * FROM ticket WHERE order_id=:order_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['order_id'=>$order_id]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Ticket');
		return $STMT->fetchAll();
	}

	public function getAllTakenSeats($movie_id,$movie_date,$movie_day,$movie_time){
		$SQL = 'SELECT seat_id FROM ticket 
		INNER JOIN `orders` ON ticket.order_id = `orders`.order_id 
		WHERE movie_id=:movie_id and movie_date=:movie_date and movie_day=:movie_day and movie_time=:movie_time AND `orders`.cart_status = 0';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['movie_id'=>$movie_id,
			'movie_date'=>$movie_date,
			'movie_day'=>$movie_day,
			'movie_time'=>$movie_time]
		);
		$STMT->setFetchMode(PDO::FETCH_COLUMN, 0);
		return $STMT->fetchAll();
	}
 
}