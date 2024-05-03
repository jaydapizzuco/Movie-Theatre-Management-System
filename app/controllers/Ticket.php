<?php
namespace app\controllers;

class Ticket extends \app\core\Controller {
    private $schedule;

    public function seatSelection(){
    $schedule = new \app\models\MovieSchedule();
    $schedule = $schedule->getById($_POST['schedule']);

     if($_SERVER['REQUEST_METHOD'] === 'POST'){
        
        $selectedSeats = $_POST['seats'];
        $numberOfSeats = sizeof($selectedSeats);

        $order = new \app\models\Order();
        $order->user_id = $_SESSION['user_id'];
        $order->order_date = date("Y-m-d");
        $price = $numberOfSeats * 11.99;
        $order->total_price = $price + ($price * 0.15); 
        $order->number_tickets = $numberOfSeats;
        $order->insert();

        
        date_default_timezone_set('America/Montreal');

            $timestamp = date("Y-m-d");
            $timestamp = strtotime($timestamp);
            $dayInt = date('N', $timestamp);

        $screenDayInt = 0;
            switch ($schedule->day) {
                case 'Sunday':
                    $screenDayInt = 0;
                    break;
                case 'Monday':
                    $screenDayInt = 1;
                    break;
                case 'Tuesday':
                    $screenDayInt = 2;
                    break;
                case 'Wednesday':
                    $screenDayInt = 3;
                    break;
                case 'Thursday':
                    $screenDayInt = 4;
                    break;
                case 'Friday':
                    $screenDayInt = 5;
                    break;
                case 'Saturday':
                    $screenDayInt = 6;
                    break;
                        
                default:
                    // code...
                    break;
            }

            $addigDays =0;

            if ($screenDayInt >= $dayInt){
                $addingDays = $screenDayInt - $dayInt; 
            }
            else {
                $addingDays = (7 - $dayInt) + $screenDayInt;
            }
       
        $movieDate = Date('Y-m-d', strtotime("+". $addingDays ." days"));


        foreach ($selectedSeats as $seat) {
            $ticket = new \app\models\Ticket();
            $ticket->order_id =  $order->order_id;
            $ticket->movie_id =$schedule->movie_id;
            $ticket->seat_id = $seat;
            $ticket->movie_date = $movieDate;
            $ticket->movie_day = $schedule->day;
            $ticket->movie_time = $schedule->getTime($schedule->time_id);
            $ticket->insert();
        }
         $this->view('Order/cart', $order);
    }
    else{
        $this->view('Ticket/seatSelection',$schedule);
    }

}


#[\app\filters\Login] 
 public function selectScreening(){
     $movie = new \app\models\Movie();
     $movie = $movie->getByID($_GET['id']);

     if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $schedule = new \app\models\MovieSchedule();
        $schedule->movie_id = $movie->movie_id;
        $screeningInfo = explode(':', $_POST['screening']);
        $schedule->day = trim($screeningInfo[0]);
        $schedule->time_id = $schedule->getTimeId(trim($screeningInfo[1]).trim($screeningInfo[2]).trim($screeningInfo[3]));

         $this->schedule = $schedule;

         $this->view('Ticket/seatSelection',$schedule);

    }
    else{
        $this->view('Ticket/selectScreening', $movie);
    }

 }

    public function createTicket($order_id, $movie_id, $seat_id, $movie_day, $movie_time) {
        $ticket = new Ticket();
        $ticket->order_id = $order_id;
        $ticket->movie_id = $movie_id;
        $ticket->seat_id = $seat_id;
        $ticket->movie_day = $movie_day;
        $ticket->movie_time = $movie_time;
        $ticket->insert();

       
        $this->view('/cart');//dont know where we going to redirect it 
    }

    public function deleteTicket($ticket_id) {
        $ticket = Ticket::getByID($ticket_id);
        if ($ticket) {
            $ticket->delete();
           
            $this->redirect('order/cart');
        } else {
          
            $this->view('error', ['message' => 'not a ticket']);
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

