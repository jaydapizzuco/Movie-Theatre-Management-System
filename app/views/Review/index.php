<?php
    $reviews = new \app\models\Review();
    $reviews = $reviews->getByMovie($data->movie_id);
     

    $movie = new \app\models\Movie();
    $movie = $movie->getByID($data->movie_id);

     ?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Reviews</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
       
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background: #f0f0f0;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            font-size: 24px;
        }

        header nav ul {
            list-style: none;
            display: flex;
        }

        header nav ul li {
            padding: 0 10px;
        }

        header nav ul li a {
            text-decoration: none;
            color: #333;
        }

        main {
            flex: 1;
            padding: 20px;
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
        }

        .movie-cover {
            flex-basis: 20%;
            text-align: center;
            padding: 10px;
            background: lightblue; 
        }

        .review-list {
            flex-basis: 70%;
            padding: 10px;
        }

        .review {
            background: #333;
            color: white;
            margin-bottom: 20px;
            padding: 20px;
        }

        .review p.stars {
            margin-bottom: 10px;
        }

        footer {
            background: #f0f0f0;
            padding: 10px 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1><?= $data->title ?> Reviews</h1>
        <nav>
            <ul>
                <li><a href="/Movie/index">Movies</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="/User/profile">Account</a></li>
                <li><a href ="/Order/incomplete"><i class="bi bi-cart-fill"></i></a></li>
            </ul>
        </nav>
    </header>
    <a href="/Review/create?movie_id=<?= $data->movie_id ?>" class="btn btn-primary">Write a Review</a>
    <main>
        <section class="movie-cover">
            <img src="<?= $data->image ?>" alt="<?= $data->title ?>" style="max-width: 100%;">
        </section>
        <section class="review-list">
            <h2>All Reviews:</h2>
            <?php if (!empty($reviews)) : ?>
                <?php foreach ($reviews as $review) : ?>
                    <div class="review">
                        <p class="stars"><?= str_repeat('⭐', $review->stars) ?></p>
                        <p><?= $review->review_text ?></p>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p>No reviews for this movie yet.</p>
            <?php endif; ?>
        </section>
    </main>
    <footer>
        <p>Footer</p>:
    </footer>
</body>
</html>

