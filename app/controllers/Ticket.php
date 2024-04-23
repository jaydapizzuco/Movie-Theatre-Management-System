<?php
namespace app\controllers;

use app\models\Ticket;

class TicketController extends \app\core\Controller {

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

