<!DOCTYPE html>
<html>

<head>
    <title><?= __('Movie Theatre')?></title>
    <style><?php include 'app/css/movie.css'; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<!-- Navigation Bar -->
<nav>
    <a href="/User/profile"><?= __('Account')?></a> &nbsp&nbsp
    <a href="/Movie/index"><?= __('Movies')?></a>
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

<body>
        <div class="receipt">
            <p><?= __('Receipt #: ')?><?= $data->order_id ?></p>
            <p><?= __('Showtime: ')?><?= $allTickets[0]->movie_day ?> <?= $allTickets[0]->movie_time ?></p>
            <p><?= $movie->title ?></p>
            <p> <?= __('Seats:')?>
            <?php 
            foreach ($allTickets as $seat){
                 echo $seat->seat_id . ", ";
            }
            ?> </p>
            <hr>
            <p><?= __('Total: $ ')?><?= $data->total_price?></p>
            <p><?= __('Enjoy the Show!')?></p>
      </div>

          <div class="row justify-content-end mt-4">
            <div class="col-md-6">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                       <a href="/Movie/index"><?= __('Browse Movies')?></a>
                   </div>
               </div>
           </div>
       </div>

</body>
</html>