<!DOCTYPE html>
<html>
<head>
    <title><?= __('Movie Theatre')?></title>
    <style><?php include 'app/css/movie.css'; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
        }

        .navbar {
            background-color: #555;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .main-content {
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .review-box {
            background-color: #ddd;
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
            width: 300px;
            text-align: center;
        }

        .button {
            padding: 10px 20px;
            margin: 5px;
            border: none;
            color: white;
        }

        .approve {
            background-color: #4CAF50; /* Green */
        }

        .reject {
            background-color: #f44336; /* Red */
        }

        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style> -->
</head>
<body>

<div class="header">
    <h1><?= __('Reviews')?></h1>
</div>

<nav>
    <a href="/User/adminProfile"><?= __('Account') ?></a> &nbsp&nbsp
    <a href="/Movie/index"><?= __('Movies') ?></a>
</nav>

<div class="gallery">
    <?php
   
   $reviewsModel = new \app\models\Review();
   $reviews = $reviewsModel->getAllDisapproved();
   
   
   foreach ($reviews as $review) {
       $movieModel = new \app\models\Movie();
       $movie = $movieModel->getByID($review->movie_id);
       $review->movie_title = $movie->title;
       $review->movie_image = $movie->image;
   }
   
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       if (isset($_POST['approve_review'])) {
           $reviewId = $_POST['approve_review'];
        
           $reviewModel = new \app\models\Review();
           $reviewModel->approve($reviewId);
         
           $reviews = array_filter($reviews, function ($review) use ($reviewId) {
               return $review->review_id != $reviewId;
           });
       } elseif (isset($_POST['reject_review'])) {
           $reviewId = $_POST['reject_review'];
           
           $reviewModel = new \app\models\Review();
           $reviewModel->reject($reviewId);
         
           $reviews = array_filter($reviews, function ($review) use ($reviewId) {
               return $review->review_id != $reviewId;
           });
       }
   }
   
   

    foreach ($reviews as $review): ?>
        <?php 
        $user = new \app\models\User();
        $user = $user->getByID ($review->user_id);
        ?>
        <div class="gallery-item">
            <img src="<?= $review->movie_image ?>" alt="Movie Cover" style="width: 200px; height: 300px;">
            <h3><?= $review->movie_title ?></h3>
            <p><?= $user->name ?></p>
            <p><?= $review->review_text ?></p>
            <p><?= $review->review_date ?></p>
            <form method="post">
                <input type="hidden" name="review_id" value="<?= $review->review_id ?>">
                <button type="submit" name="approve_review<?= $review->review_id ?>" value="<?= $review->review_id ?>" class="button approve"><?= __('Approve')?></button>
                <button type="submit" name="reject_review<?= $review->review_id ?>" value="<?= $review->review_id ?>" class="button reject"><?= __('Reject')?></button>
            </form>
        </div>
    <?php endforeach; ?>
</div>

<div class="footer">
    <p>Footer</p>
</div>

</body>
</html>
