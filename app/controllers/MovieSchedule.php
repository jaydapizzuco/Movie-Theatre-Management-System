<?php
namespace app\controllers;

use app\models\MovieSchedule;

class MovieScheduleController extends \app\core\Controller {

    public function createSchedule($movie_id, $day, $time_id) {
        $schedule = new MovieSchedule();
        $schedule->movie_id = $movie_id;
        $schedule->day = $day;
        $schedule->time_id = $time_id;
        $schedule->insert();

        
        $this->redirect('');
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
