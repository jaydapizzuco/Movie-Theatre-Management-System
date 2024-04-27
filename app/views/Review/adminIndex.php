<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Review Approvals</title>
    <style>
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
    </style>
</head>
<body>

<div class="header">
    <h1>Reviews</h1>
</div>

<div class="navbar">
    <a href="/Movie/index">Movies</a>

    <a href="/User/profile">Account</a>
</div>

<div class="main-content">
    <?php
   
   $reviewsModel = new \app\models\Review();
   $reviews = $reviewsModel->getAllDisapproved();
   
   // Fetch movie title for each review
   foreach ($reviews as $review) {
       $movieModel = new \app\models\Movie();
       $movie = $movieModel->getByID($review->movie_id);
       $review->movie_title = $movie->title;
       $review->movie_image = $movie->image;
   }
   
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       if (isset($_POST['approve_review'])) {
           $reviewId = $_POST['approve_review'];
           // Approve the review with $reviewId
           $reviewModel = new \app\models\Review();
           $reviewModel->approve($reviewId);
           // After approving, remove the review from the list
           $reviews = array_filter($reviews, function ($review) use ($reviewId) {
               return $review->review_id != $reviewId;
           });
       } elseif (isset($_POST['reject_review'])) {
           $reviewId = $_POST['reject_review'];
           // Reject the review with $reviewId
           $reviewModel = new \app\models\Review();
           $reviewModel->reject($reviewId);
           // After rejecting, remove the review from the list
           $reviews = array_filter($reviews, function ($review) use ($reviewId) {
               return $review->review_id != $reviewId;
           });
       }
   }
   
   

    foreach ($reviews as $review): ?>
        <div class="review-box">
            <img src="<?= $review->movie_image ?>" alt="Movie Cover" style="width: 100%">
            <h3><?= $review->movie_title ?></h3>
            <p><?= $review->review_text ?></p>
            <form method="post">
                <input type="hidden" name="review_id" value="<?= $review->review_id ?>">
                <button type="submit" name="approve_review" value="<?= $review->review_id ?>" class="button approve">Approve</button>
                <button type="submit" name="reject_review" value="<?= $review->review_id ?>" class="button reject">Reject</button>
            </form>
        </div>
    <?php endforeach; ?>
</div>

<div class="footer">
    <p>Footer</p>
</div>

</body>
</html>
