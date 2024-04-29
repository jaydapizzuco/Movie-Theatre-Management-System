<?php 
namespace app\models;

use PDO;

class Order extends \app\core\Model{

	public $order_id;
	public $user_id;
	public $order_date;
	public $total_price;
	public $number_tickets;
	public $cart_status;
	public $order_status;

	public function insert(){
		$SQL = 'INSERT INTO orders(user_id,order_date,total_price,number_tickets) VALUES (:user_id,:order_date,:total_price,:number_tickets)';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['user_id'=>$this->user_id,
			'order_date'=>$this->order_date,
			'total_price'=>$this->total_price,
			'number_tickets'=>$this->number_tickets]
		);
		$this->order_id = self::$_conn->lastInsertId();
	}

	public function delete(){
		$SQL = 'UPDATE orders SET order_status=0 WHERE order_id=:order_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['order_id'=>$this->order_id]
		);
	}

	public function setCartStatusFalse(){
		$SQL = 'UPDATE orders SET cart_status=0 WHERE order_id=:order_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['order_id'=>$this->order_id]
		);
	}

	public function getForCart($user_id){
		$SQL = 'SELECT * FROM orders WHERE user_id=:user_id AND cart_status=1 AND order_status=1';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['user_id'=>$user_id]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Order');
		return $STMT->fetchAll();
	}

	public function getAll(){
		$SQL = 'SELECT * FROM orders';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Order');
		return $STMT->fetchAll();
	}

	public function getByID($order_id){
		$SQL = 'SELECT * FROM orders WHERE order_id=:order_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['order_id'=>$order_id]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Order');
		return $STMT->fetch();
	}

	public function getByMovieID($movie_id){
		$SQL = 'SELECT * FROM orders WHERE movie_id=:movie_id AND order_status=1';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['movie_id'=>$movie_id]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Order');
		return $STMT->fetchAll();
	}

	public function getByUserID($user_id){
		$SQL = 'SELECT * FROM orders WHERE user_id=:user_id AND order_status=1 AND cart_status=0';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['user_id'=>$user_id]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Order');
		return $STMT->fetchAll();
	}

	public function getByUserIDForCart($user_id){
		$SQL = 'SELECT * FROM orders WHERE user_id=:user_id AND order_status=1 AND cart_status=1';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['user_id'=>$user_id]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Order');
		return $STMT->fetchAll();
	}

	public function getByUserIDandDate($user_id,$order_date){
		$SQL = 'SELECT * FROM orders WHERE user_id=:user_id AND order_date=:order_date AND order_status=1';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['user_id'=>$user_id,
			'order_date'=>$order_date]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Order');
		return $STMT->fetch();
	}


	public function getTicketsByOrderID($order_id) {
        $SQL = 'SELECT * FROM `ticket` WHERE order_id = :order_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['order_id' => $order_id]);
        return $STMT->fetchAll(PDO::FETCH_ASSOC);
    }


 

}