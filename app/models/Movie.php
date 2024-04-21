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

	public function insert(){
		$SQL = 'INSERT INTO movie(title,image,description,length,director,trailer,release_date) VALUE (:title,:image,:description,:length,:director,:trailer,:release_date)';
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
		$SQL = 'UPDATE movie SET title=:title,image=:image,description=:description,length=:length,director=:description,trailer=:trailer,release_date:release_date WHERE movie_id=:movie_id';
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

	public function delete(){

	}

	public function getByID(){

	}

	public function getByTitle(){

	}




	public function decreaseAvailableSeats(){
		
	}
 
	public function increaseAvailableSeats(){
		
	}

    public function serachByTitle(){
		
	}

}