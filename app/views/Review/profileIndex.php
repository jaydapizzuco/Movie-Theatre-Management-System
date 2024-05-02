<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Reviews</title>
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
            color: black;
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
    <h1>My Reviews</h1>
</div>

<div class="navbar">
    <a href="/Movie/index">Movies</a>
    <a href="/User/profile">Account</a>
    <a href ="/Order/incomplete"><i class="bi bi-cart-fill"></i></a>
</div>

<div class="main-content">
    <?php
    
    $reviewsModel = new \app\models\Review();
    $reviews = $reviewsModel->getReviewsByUser($_SESSION['user_id']);

    
    if (!empty($reviews)) {
       
        foreach ($reviews as $review):
           
            $movieModel = new \app\models\Movie();
            $movie = $movieModel->getByID($review->movie_id);
            ?>
            <div class="review-box">
              
                <img src="<?= $movie->image ?>" alt="Movie Cover" style="width: 100%">
               
                <h3><?= $movie->title ?></h3>
                
                <p><?= $review->review_text ?></p>
                
                <p class="stars"><?= str_repeat('⭐', $review->stars) ?></p>
               
                <div>
                    
                    <a href="/Review/update?id=<?= $review->review_id ?>"><button class="button">Modify</button></a>
                    
                    <a href="/Review/delete?id=<?= $review->review_id ?>"><button class="button">Delete</button></a>
                </div>
            </div>
        <?php
        endforeach;
    } else {
       
        echo "<p>No reviews found.</p>";
    }
    ?>
</div>

<div class="footer">
    <p>Footer</p>
</div>

</body>
</html>
