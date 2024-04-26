<?php
namespace app\controllers;

use app\models\Order;

class OrderController extends \app\core\Controller {

    public function createOrder($user_id, $total_price) {
        $order = new Order();
        $order->user_id = $user_id;
        $order->total_price = $total_price;
        $order->insert();

        $this->redirect('order/cart');
    }

    public function cart(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $order = new \app\models\Order();
            $order = $order->getByID($_GET['order_id']);

            $this->view('Order/checkout',$order);
        }
        else{
        $this->view('Order/cart');
    }
    }

    public function checkout(){
        $this->view('Order/checkout');
    }

    public function deleteOrder($order_id) {
        $order = Order::getByID($order_id);
        if ($order) {
            $order->delete();
            
            $this->redirect('');
        } else {
        
            $this->view('error', ['message' => 'not a order']);
        }
    }

    public function setOrderStatus($order_id) {
        $order = Order::getByID($order_id);
        if ($order) {
            $order->setStatusTrue();
           
            $this->redirect('');
        } else {
        
            $this->view('error', ['message' => 'cant find order']);
        }
    }

    public function viewOrder($order_id) {
        $order = Order::getByID($order_id);
        if ($order) {
            $this->view('order/history');
        } else {
           
            $this->view('error', ['message' => 'order not found']);
        }
    }
}
  
?>
