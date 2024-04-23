<?php 
namespace app\models;

use PDO;

class Movie extends \app\core\Model{

	public $movie_id;
	public $title;
	public $image;
	public $description;
	public $director;
	public $trailer;
	public $length;
	public $release_date;
	public $ticket_revenue;
	public $status;

	public function insert(){
		$SQL = 'INSERT INTO movie(title,image,description,length,director,trailer,release_date) VALUES (:title,:image,:description,:length,:director,:trailer,:release_date)';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['title'=>$this->title,
			'image'=>$this->image,
			'description'=>$this->description,
			'length'=>$this->length,
			'director'=>$this->director,
			'trailer'=>$this->trailer,
			'release_date'=>$this->release_date]
		);
	}

	public function update(){
		$SQL = 'UPDATE movie SET title=:title, image=:image, description=:description, length=:length, director=:director, trailer=:trailer, release_date=:release_date WHERE movie_id=:movie_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute([
			'title'=>$this->title,
			'image'=>$this->image,
			'description'=>$this->description,
			'length'=>$this->length,
			'director'=>$this->director,
			'trailer'=>$this->trailer,
			'release_date'=>$this->release_date,
			'movie_id'=> $this->movie_id
		]);
	}

	public function delete(){
		$SQL = 'UPDATE movie SET status=0 WHERE movie_id=:movie_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['movie_id'=>$this->movie_id]
		);
	}

	public function getAll(){
		$SQL = 'SELECT * FROM movie';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute();
		$movies = $STMT->fetchAll(PDO::FETCH_CLASS,'app\models\Movie');
		return $movies;
	}

	public function getAllAvailable(){
		$SQL = 'SELECT * FROM movie WHERE status=1';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute();
		$movies = $STMT->fetchAll(PDO::FETCH_CLASS,'app\models\Movie');
		return $movies;
	}

	public function getAllUnavailable(){
		$SQL = 'SELECT * FROM movie WHERE status=0';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute();
		$movies = $STMT->fetchAll(PDO::FETCH_CLASS,'app\models\Movie');
		return $movies;
	}

	public function getByID($movie_id){
		$SQL = 'SELECT * FROM movie WHERE movie_id=:movie_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['movie_id'=>$movie_id]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Movie');
		return $STMT->fetch();
	}

	public function getByTitle($title){
		$SQL = "SELECT * FROM movie WHERE title LIKE '%$title%' AND status=1";
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['title'=>$title]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Movie');
		return $STMT->fetchAll();
	}

	public function getByOrderedDates(){
		$SQL = "SELECT * FROM movie WHERE status=1 ORDER BY release_date";
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Movie');
		return $STMT->fetchAll();
	}

	public function getByOrderedDatesReverse(){
		$SQL = "SELECT * FROM movie WHERE status=1 ORDER BY release_date DESC";
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Movie');
		return $STMT->fetchAll();
	}

	public function getAlphabeticalOrder(){
		$SQL = "SELECT * FROM movie WHERE status=1 ORDER BY title";
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Movie');
		return $STMT->fetchAll();
	}



	public function decreaseAvailableSeats(){
		
	}
 
	public function increaseAvailableSeats(){
		
	}
}