<?php
namespace app\controllers;

class Movie extends \app\core\Controller{

    public function index(){
        $allMovies = new \app\models\Movie();
        $allMovies = $allMovies->getAll();
        $this->view('Movie/index', $allMovies);
    }

    public function adminIndex(){
         $allMovies = new \app\models\Movie();
        $allMovies = $allMovies->getAll();
        $this->view('Movie/adminIndex', $allMovies);
    }

    public function indexAlphabetical(){
        $moviesAbc = new \app\models\Movie();
        $moviesAbc = $allMovies->getAlphabeticalOrder();
        $this->view('Movie/index',$moviesAbc);
    }

    public function indexOrderedDates(){
        $movies123 = new \app\models\Movie();
        $movies123 = $allMovies->getByOrderedDates();
        $this->view('Movie/index',$movies123);
    }

    public function indexOrderedDatesReverse(){
        $movies321 = new \app\models\Movie();
        $movies321 = $allMovies->getByOrderedDatesReverse();
        $this->view('Movie/index',$movies321);
    }

    public function individual(){
        $movie = new \app\models\Movie();
        $movie = $movie->getByID($_GET['id']);
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
        $movie = $movie->getByID($_GET['id']);

        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $movie->title = $_POST['title'];
            $movie->image = $_POST['image'];
            $movie->description = $_POST['description'];
            $movie->length = $_POST['length'];
            $movie->director = $_POST['director'];
            $movie->release_date = $_POST['release_date'];
            $movie->trailer = $_POST['trailer'];
            $movie->movie_id = $_GET['id'];

            $movie->update();

            header('location:/User/adminProfile');
        }
        else {
            $this->view('Movie/modify', $movie);
        }

    }

    // #[\app\filters\AdminLogin] 
    public function delete(){
        $movie = new \app\models\Movie();
        $movie = $movie->getByID($_SESSION['movie_id']);

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $movie->delete();
            header('location:/Movie/index');
        }else{
            $this->view('Movie/delete',$movie);
        }
    }
}