<?php
namespace app\controllers;

class Ticket extends \app\core\Controller {

    public function seatSelection(){
     $movie = new \app\models\Movie();
     $movie = $movie->getByID($_GET['id']);

    //  if($_SERVER['REQUEST_METHOD'] === 'POST'){

    //     $schedule = new \app\models\MovieSchedule();
    //     $schedule->movie_id = $movie->movie_id;
    //     $screeningInfo = explode(':', $_POST['screening']);
    //     $schedule->day = trim($screeningInfo[0]);
    //     $schedule->time_id = $schedule-> getTimeId(trim($screeningInfo[1]));
    // }
    $this->view('Ticket/seatSelection',$movie);
    }

    public function createTicket($order_id, $movie_id, $seat_id, $movie_day, $movie_time) {
        $ticket = new Ticket();
        $ticket->order_id = $order_id;
        $ticket->movie_id = $movie_id;
        $ticket->seat_id = $seat_id;
        $ticket->movie_day = $movie_day;
        $ticket->movie_time = $movie_time;
        $ticket->insert();

       
        $this->redirect('order/cart');//dont know where we going to redirect it 
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

