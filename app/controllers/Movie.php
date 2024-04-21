<?php
namespace app\controllers;

class Movie extends \app\core\Controller{


    public function index(){
        $allMovies = new \app\models\Movie();
        $allMovies = $allMovies->getAll();
        $this->view('Movie/index', $allMovies);
    }

    public function individual(){
        $movie = new \app\models\Movie();
        $movie = $movie->getByID($_GET['movie_id']);
        $_SESSION['movie_id'] = $movie->movie_id;
        $this->view('Movie/individual', $movie);
    }

    
    public function create(){
        
    }

    public function update(){


    }

    public function delete(){

    }
}