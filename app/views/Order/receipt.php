<!DOCTYPE html>
<html>

<head>
    <title><?= __('Movie Theatre')?></title>
    <style><?php include 'app/css/movie.css'; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<nav>
    <a name='homepage' href="/Main/index"><i class="bi bi-house"></i></a> &nbsp&nbsp
    <a name ="account" href="/User/profile"><?= __('Account') ?></a> &nbsp&nbsp 
    <a name ="aboutus" href="/Main/aboutus"><?= __('About us') ?></a> &nbsp&nbsp
    <a name="movies" href="/Movie/index"><?= __('Movies') ?></a> &nbsp&nbsp
    <a href ="/Order/incomplete"><i class="bi bi-cart-fill"></i></a> &nbsp&nbsp
</nav>

<header>
    <h1><?= __('Booking Successful')?></h1>
</header>

    <?php
            $allTickets = new \app\models\Ticket();
            $allTickets = $allTickets->getByOrderID($data->order_id);

            $movie = new \app\models\Movie();
            $movie = $movie->getByID($allTickets[0]->movie_id);

   ?>

<body class="body">
        <div class="receipt">
            <p><?= __('Receipt #: ')?><?= $data->order_id ?></p>
            <?php
             $date = new DateTime( $allTickets[0]->movie_date);
                            $date = $date->format('F j, Y');
                            ?>
            <p><?= __('Showtime: ')?><?= $allTickets[0]->movie_day ?> <?= $date ?> <?= $allTickets[0]->movie_time ?></p>
            <p><?= $movie->title ?></p>
            <p> <?= __('Seats:')?>
            <?php 
            foreach ($allTickets as $seat){
                 echo $seat->seat_id . ", ";
            }
            ?> </p>
            <hr>
            <p><?= __('Total: $ ')?><?= round($data->total_price, 2)?></p>
            <p><?= __('Enjoy the Show!')?></p>

      </div>

      <div class="row justify-content-center">
        <div class="col-auto">
            <a href="/Movie/index" class="btn btn-primary"><?= __('Browse Movies')?></a>
        </div>
    </div>

</body>
</html>