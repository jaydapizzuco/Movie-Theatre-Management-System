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
    <a href="aboutus.html"><?= __('About Us')?></a> &nbsp&nbsp
    <a href="/Movie/index"><?= __('Movies')?></a>
</nav>

<body>
    <header>
        <?php

             $tickets = new \app\models\Ticket();
             $tickets = $tickets->getByOrderID($data->order_id);

              $movie = new \app\models\Movie();
              $movie = $movie->getById($tickets[0]->movie_id);      
          ?>
        <h1><?= __('Are you sure you want to delete your tickets for ' . $movie->title) . '?'?></h1>
    </header><br><br>

        <div class="container2">
            <div class="row">
            <div class="col-md-6 offset-md-3">
                
                <img src="<?= $movie->image ?>" class="movie-image" alt="<?= $movie->title ?>">

              <div class="receipt">
        <ul class="list-group">
            <?php
            foreach ($tickets as $index => $ticket) :
                $movie = new \app\models\Movie();
                $movie = $movie->getById($ticket->movie_id);
            ?>
                <li class="list-group-item">
                    <h5 class="card-title"><?= $movie->title ?></h5><br>
                    <p class="card-text"><?= $ticket->movie_day ?> : <?= $ticket->movie_time ?> </p>
                    <p class="card-text"><?= __('Seat Number: ')?><?= $ticket->seat_id ?></p>
                </li>
        </ul>
        <?php endforeach; ?>
        <div class="row justify-content-end mt-4">
                    <h5 class="card-title"><?= __('Total Price')?></h5>
                    <p class="card-text"><?= __('Total: $ ')?><?= round($data->total_price, 2) ?></p>
        </div>
    </div>

        <?php  ?>
        <form method="post">
            <div class="form-group">
                <input type="submit" name="action" value=" <?= __('Delete')?> "/><br><br>
                <a href="/User/purchaseHistory"><?= __('Cancel')?></a>
            </div><br>
          </form>   
        </div>

        </div>

    <footer>
        <br>Copyright &copy 2024 
    </footer>
</body>

</html>