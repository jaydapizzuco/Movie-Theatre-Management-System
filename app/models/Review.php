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
		$SQL = 'INSERT INTO review(user_id, movie_id, stars, review_text, review_date, approved) VALUES (:user_id, :movie_id, :stars, :review_text, :review_date, :approved)';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute([
			'user_id' => $this->user_id,
			'movie_id' => $this->movie_id,
			'stars' => $this->stars,
			'review_text' => $this->review_text,
			'review_date' => date('Y-m-d H:i:s'), 
			'approved' => 0 
		]);
	}


	public function update(){
		$SQL = 'UPDATE review SET stars=:stars, review_text=:review_text WHERE review_id=:review_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['review_text'=>$this->review_text,
			'stars'=>$this->stars,
			'review_id'=>$this->review_id]
		);
	}	

	public function delete(){
		$SQL = 'DELETE FROM review WHERE review_id=:review_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['review_id'=>$this->review_id]
		);
	}

	public function approve($review_id){
		$SQL = 'UPDATE review SET approved=1 WHERE review_id=:review_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(['review_id' => $review_id]);
	}
	

	public function reject() {
        $SQL = 'UPDATE review SET approved = 0 WHERE review_id = :review_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['review_id' => $this->review_id]);
    }

	

	public function getByID($review_id){
		$SQL = 'SELECT * FROM review WHERE review_id=:review_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['review_id'=>$review_id]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Review');
		return $STMT->fetch();
	}

    public function getByUser($user_id){
		$SQL = 'SELECT * FROM movie WHERE user_id=:user_id AND approved=1';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['user_id'=>$user_id]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Review');
		return $STMT->fetchAll();
	}

	public function getByMovie($movie_id){
		$SQL = 'SELECT * FROM review WHERE movie_id=:movie_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['movie_id'=>$movie_id]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Review');
		return $STMT->fetchAll();
	}

    public function getAllDisapproved(){
		$SQL = 'SELECT * FROM review WHERE approved=0';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Review');
		return $STMT->fetchAll();
	}

	public function getAllApproved(){
		$SQL = 'SELECT * FROM review WHERE approved=1';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Review');
		return $STMT->fetchAll();
	}
	
	public function getReviewsByUser($user_id){
		$SQL = 'SELECT * FROM review WHERE user_id=:user_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(['user_id' => $user_id]);
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Review');
		return $STMT->fetchAll();
	}

	
	
}