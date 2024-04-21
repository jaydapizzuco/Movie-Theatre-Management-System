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

    // #[\app\filters\AdminLogin] 
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

    // #[\app\filters\AdminLogin] 
    public function update(){
        $movie = new \app\models\Movie();
        $movie = $movie->getByID($_SESSION['movie_id']);

        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $movie->title = $_POST['title'];
            $movie->image = $_POST['image'];
            $movie->description = $_POST['description'];
            $movie->length = $_POST['length'];
            $movie->director = $_POST['director'];
            $movie->release_date = $_POST['release_date'];
            $movie->trailer = $_POST['trailer'];

            header('location:/User/adminProfile');
        }
        else {
            $this->view('Movie/index');
        }

    }

    #[\app\filters\AdminLogin] 
    public function delete(){

    }
}