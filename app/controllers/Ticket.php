<?php
namespace app\controllers;

class Ticket extends \app\core\Controller {

    public function seatSelection(){
     $movie = new \app\models\Movie();
     $movie = $movie->getByID($_GET['id']);

     if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $schedule = new \app\models\MovieSchedule();
        $schedule->movie_id = $movie->movie_id;
        $screeningInfo = explode(':', $_POST['screening']);
        $schedule->day = trim($screeningInfo[0]);

        $selectedSeats = $_POST['seats'];
     foreach ($selectedSeats as $seat) {
        echo $seat;
        $ticket = new \app\models\Ticket();
        $ticket->order_id = 1;
        $ticket->movie_id =$movie->movie_id;
        $ticket->seat_id = $seat;
        $ticket->movie_day = $schedule->day;
        $ticket->movie_time = trim($screeningInfo[1]);
        $ticket->insert();
        }

    }
    else{
    $this->view('Ticket/seatSelection',$movie);
    }
}

    public function createTicket($order_id, $movie_id, $seat_id, $movie_day, $movie_time) {
        $ticket = new \app\models\Ticket();
        $ticket->order_id = $order_id;
        $ticket->movie_id = $movie_id;
        $ticket->seat_id = $seat_id;
        $ticket->movie_day = $movie_day;
        $ticket->movie_time = $movie_time;
        $ticket->insert();

       
        $this->view('User/profile');
    }

    public function deleteTicket($ticket_id) {
        $ticket = Ticket::getByID($ticket_id);
        if ($ticket) {
            $ticket->delete();
           
            $this->redirect('order/cart');
        } else {
          
            $this->view('error', ['message' => 'not a tickket']);
        }
    }

    public function getTicketByID($ticket_id) {
        $ticket = Ticket::getByID($ticket_id);
        if ($ticket) {
            $this->view('ticket/index');
        } else {
           
            $this->view('error', ['message' => 'ticket not  found']);
        }
    }

  
}
?>

