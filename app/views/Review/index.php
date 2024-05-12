<?php
    $reviews = new \app\models\Review();
    $reviews = $reviews->getByMovie($data->movie_id);
     

    $movie = new \app\models\Movie();
    $movie = $movie->getByID($data->movie_id);

     ?>
  <!DOCTYPE html>
<html>
<head>
    <title><?= __('Movie Theatre')?></title>
    <style><?php include 'app/css/movie.css'; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

<!--     <style>
       
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
    </style> -->
</head>
<body>
    <nav>
         <a name='homepage' href="/Main/index"><?= __('Home Page')?></a> &nbsp&nbsp
        <a href="/User/profile"><?= __('Account')?></a> &nbsp&nbsp
        <a href="/Main/aboutus"><?= __('About Us')?></a> &nbsp&nbsp
        <a href="/Movie/index"><?= __('Movies')?></a>
        <a href ="/Order/incomplete"><i class="bi bi-cart-fill"></i></a>
    </nav>
    <header>
        <h1><?= $data->title ?> <?= __('Reviews')?></h1>
    </header>



    <?php 

    //checking if a ticket from the user has the movie id and check if the date of the order passed
    $orders = new \app\models\Order();
    $orders = $orders->getByUserID($_SESSION['user_id']);

    foreach($orders as $order){
        $tickets = new \app\models\Ticket();
        $tickets = $tickets->getByOrderID($order->order_id);
        if(($tickets[0]->movie_id == $_GET['movie_id']) && ($tickets[0]->movie_date < date('Y-m-d'))): ?>
        <a href="/Review/create?movie_id=<?= $data->movie_id ?>" class="btn btn-primary"><?= __('Write a Review')?></a>
        <?php
        break;
        endif;
    }


    ?>

    
    <main>
        <div  style="display: flex; flex-direction: column; align-items: center;"> 
         <img src="<?= $data->image ?>" alt="<?= $data->title ?>" style="max-width: 100%;">
     <h2><?= __('All Reviews:')?></h2>
      </div>
        <section class="gallery">
        <section class="gallery-item">
            <?php if (!empty($reviews)) : ?>
                <?php foreach ($reviews as $review) : ?>

     <?php 
        $user = new \app\models\User();
        $user = $user->getByID ($review->user_id);
        ?>
                    <div class="review">
                        <p class="stars"><?= str_repeat('⭐', $review->stars) ?></p>
                        <p><?= $user->name ?></p>
                        <p name="review<?= $review->review_id ?>"><?= $review->review_text ?></p>
                        <p><?= $review->review_date ?></p>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p><?= __('No reviews for this movie yet.')?></p>
            <?php endif; ?>
        </section>
    </section>
    </main>
    <footer>
        <p>Footer</p>:
    </footer>
</body>
</html>

