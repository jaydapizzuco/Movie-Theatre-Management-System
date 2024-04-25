<?php
namespace app\controllers;

class Review extends \app\core\Controller{

    public function create(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $review = new \app\models\Review();

            $review->user_id = $_POST['user_id'];
            $review->movie_id = $_POST['movie_id'];
            $review->stars = $_POST['stars'];
            $review->review_text = $_POST['review_text'];

            $review->insert();
            //redirect
            header('location:/Movie/individual');
        }else{
            $this->view('Review/create');
        }
    }


    public function delete(){
        $review = new \app\models\Review();
        $review = $review->getByID($_SESSION['review_id']);

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $review->delete();
            header('location:/User/profile');
        }else{
            $this->view('Review/delete',$review);
        }
    }


    public function update()
{
    
    $review_id = $_SESSION['review_id'];

    $review = new \app\models\Review();
    $review = $review->getByID($review_id);

   
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      
        $review->review_text = $_POST['review_text'];

       
        $review->update();

        
        header('location:/User/profile');
        exit; 
    } else {
       
        $this->view('Review/update', ['review' => $review]);
    }
}

    public function approve(){
        $review = new \app\models\Review();
        $review = $review->getByID($_SESSION['review_id']);

        if ($_SERVER['REQUEST_METHOD'] === 'POST'){

            $review->approve();

            header('location:/User/adminReviews');
        }
        else {
            $this->view('User/adminReviews');
        }
    }


    public function reject() {
        $review = new \app\models\Review();
        $review = $review->getByID($_SESSION['review_id']);
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $review->reject(); 
            header('location:/User/adminReviews'); 
        } else {
            $this->view('User/adminReviews'); 
        }
    }

    
}