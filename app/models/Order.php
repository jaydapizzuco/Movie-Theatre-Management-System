<?php 
namespace app\models;

use PDO;

class MovieSchedule extends \app\core\Model{

	public $order_id;
	public $user_id;
	public $order_date;
	public $total_price;
	public $order_status;

	public function insert(){
		$SQL = 'INSERT INTO order(user_id,total_price) VALUE (:user_id,:total_price)';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['user_id'=>$this->user_id,
			'total_price'=>$this->total_price]
		);
	}

	public function delete(){
		$SQL = 'DELETE FROM order WHERE order_id=:order_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['order_id'=>$this->order_id]
		);
	}

	public function setStatusTrue(){
		$SQL = 'UPDATE order SET order_status=1 WHERE order_id=:order_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['order_id'=>$this->order_id]
		);
	}

	public function getAll(){

	}

	public function getByID(){

	}

	public function getByMovieID(){

	}

	public function getByUserID(){

	}


	
	public function updateMovieRevenue(){
		
	}
 
	public function authenticatePay(){
		
	}

 

}