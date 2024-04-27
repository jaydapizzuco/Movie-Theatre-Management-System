<?php
namespace app\controllers;

class Review extends \app\core\Controller{


    public function index()
{
    $movie = new \app\models\Movie();
    $movie->movie_id = $_GET['movie_id'];
    $movie = $movie->getByID($movie->movie_id );

    $this->view('Review/index', $movie);
}

public function create()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $this->handleReviewSubmission();
    } else {
        if (isset($_GET['movie_id'])) {
            $movie_id = $_GET['movie_id'];
            $movie = new \app\models\Movie();
            $movie = $movie->getByID($movie_id);

            if ($movie) {
                $this->view('Review/create', $movie);
            } else {
               
                header('Location: /Movie/index');
                exit();
            }
        } else {
       
            header('Location: /Movie/index');
            exit();
        }
    }
}

private function handleReviewSubmission()
{
    if (isset($_POST['movie_id'], $_POST['stars'], $_POST['review_text'])) {
        
        if (isset($_SESSION['user_id'])) {
            $user_id = $_SESSION['user_id']; 
        } else {
          
            header('Location: /');
            exit();
        }

        $movie_id = $_POST['movie_id'];
        $stars = $_POST['stars'];
        $review_text = $_POST['review_text'];

        $review = new \app\models\Review();
        $review->user_id = $user_id;
        $review->movie_id = $movie_id;
        $review->stars = $stars;
        $review->review_text = $review_text;

        if ($review->insert()) {
            
            header('Location: /Review/index?movie_id=' . $movie_id);
            exit();
        } else {
            
            header('Location: /Movie/index');
            exit();
        }
    } else {
      
        header('Location: /Movie/index');
        exit();
    }
}


public function delete()
{
  
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

public function modify()
{
    
    $reviews = (new \app\models\Review())->getByUser($_SESSION['user_id']);
    
    $this->view('review/modify', ['reviews' => $reviews]);
}

public function approve()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $review_id = $_POST['review_id'];
        $review = new \app\models\Review();
        $review = $review->getByID($review_id);
        if ($review) {
            $review->approve();
        }
    }
    header('Location: /Review/adminIndex');
}


    public function reject()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $review_id = $_POST['review_id'];
        $review = new \app\models\Review();
        $review = $review->getByID($review_id);
        if ($review) {
            $review->reject();
        }
    }
    header('Location: /Review/adminIndex');
}

    
    public function adminIndex()
    {
        // Retrieve disapproved reviews
        $reviewsModel = new \app\models\Review();
        $reviews = $reviewsModel->getAllDisapproved();
        
        // You might need additional data here, such as movie titles or user names
        
        // Pass the reviews and any additional data to the view
        $this->view('Review/adminindex', ['reviews' => $reviews]);
    }
    
    
  
}

    

