<!DOCTYPE html>
<html>

<head>
    <title><?= __('Movie Theatre')?></title>
    <style><?php include 'app/css/movie.css'; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<nav>
    <a name='homepage' href="/Main/index"><i class="bi bi-house"></i></a> &nbsp&nbsp
    <a name ="account" href="/User/profile"><?= __('Account') ?></a> &nbsp&nbsp 
    <a name ="aboutus" href="/Main/aboutus"><?= __('About us') ?></a> &nbsp&nbsp
    <a name="movies" href="/Movie/index"><?= __('Movies') ?></a> &nbsp&nbsp
    <a href ="/Order/incomplete"><i class="bi bi-cart-fill"></i></a> &nbsp&nbsp
</nav>

<body class="body">
    <?php
        $reviews = new \app\models\Review();
        $reviews = $reviews->getByMovie($data->movie_id);
     
        $movie = new \app\models\Movie();
        $movie = $movie->getByID($data->movie_id);
    ?>

    <header>
        <h1><?= $data->title ?> <?= __('Reviews')?></h1>
    </header>
    
    <?php 
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
    }?>

    <main>
        <div style="display: flex; flex-direction: column; align-items: center;"> 
            <img src="<?= $data->image ?>" alt="<?= $data->title ?>" style="max-width: 100%;">
           
       

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
                            <p name="name"><?= $review->review_text ?></p>
                            <p><?= $review->review_date ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <p><?= __('No reviews for this movie yet.')?></p>
                <?php endif; ?>
            </section>
        </section>
         </div>
    </main>
</body>
</html>

