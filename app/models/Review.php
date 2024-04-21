<?php 
namespace app\models;

use PDO;

class Review extends \app\core\Model{

	public $review_id;
	public $user_id;
	public $movie_id;
	public $stars;
	public $review_text;
	public $review_date;
	public $approved;

	public function insert(){
		$SQL = 'INSERT INTO review(user_id,movie_id,stars,review_text) VALUE (:user_id,:movie_id,:stars,:review_text';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['user_id'=>$this->user_id,
			'movie_id'=>$this->movie_id,
			'stars'=>$this->stars,
			'review_text'=>$this->review_text]
		);
	}

	public function update(){
		$SQL = 'UPDATE review SET review_text=:review_text WHERE review_id=:review_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['review_text'=>$this->review_text,
			'review_id'=>$this->review_id]
		);
	}

	public function delete(){
		
	}

	public function approve(){
		
	}

	public function submitForApproval(){
		
	}

    public function getByUser($user_id){
		
	}

	public function getByMovie($movie_id){
		
	}

    public function getAll(){
		
	}

}