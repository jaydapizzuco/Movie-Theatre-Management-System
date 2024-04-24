<?php
namespace app\controllers;

class MovieSchedule extends \app\core\Controller {

    public function createSchedule() {

         if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $movie = new \app\models\Movie();
            $movie = $movie->getByID($_GET['id']);
            $_SESSION['movie_id'] = $movie->movie_id;

            $schedule = new \app\models\MovieSchedule();
            $schedule->movie_id = $movie->movie_id;
            $schedule->day = $_POST['days'];
            $schedule->time_id = $movie_schedule->getTimeId($_POST['times']);
            $schedule->insert();
        }
       else{
            $this->view('MovieSchedule/create');
        }
    }

    public function deleteSchedule($schedule_id) {
        $schedule = MovieSchedule::getById($schedule_id);
        if ($schedule) {
            $schedule->delete();
            
            $this->redirect('Movie/index');
        } else {
            
            $this->view('error', ['message' => 'not a schedule enter with correct id']);
        }
    }

    public function deleteScheduleByDay($movie_id, $day){
        $schedule = new MovieSchedule();
        $schedule->deleteAfterMovieAndDay($movie_id,$day);

        $this->redirect('');
    }

    public function updateSchedule(){

    }

    
}
?>
