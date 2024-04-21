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
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $movie = new \app\models\Movie();

            $movie->title = $_POST['title'];
            $movie->image = $_POST['image'];
            $movie->description = $_POST['description'];
            $movie->length = $_POST['length'];
            $movie->director = $_POST['director'];
            $movie->release_date = $_POST['release_date'];
            $movie->trailer = $_POST['trailer'];
            $movie->insert();
            //redirect
            header('location:/User/adminProfile');
        }else{
            $this->view('Movie/create');
        }
    }

    public function update(){


    }

    public function delete(){

    }
}