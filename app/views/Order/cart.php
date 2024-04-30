<!DOCTYPE html>
<html lang="en">

<head>
    <title>Movie Theatre</title>
    <style><?php include 'app/css/movie.css'; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<!-- Navigation Bar -->
<nav>
    <a href="/User/profile">Account</a> &nbsp&nbsp
    <a href="/Movie/index">Movies</a>
</nav>

<header>
    <h1>CART</h1>
</header>

<body>
    <!-- <div class="container2">
    <h1>Tickets</h1>
        <?php 
            $tickets = new \app\models\Ticket();
            $tickets = $tickets->getByOrderID($data->order_id);
        ?>

        <?php 
            foreach ($tickets as $index => $ticket) { 

                $movie = new \app\models\Movie();
                $movie = $movie->getById($ticket->movie_id);

            ?>
               <h2><?= $movie->title ?> </h2>
               day,time,seats 
               <p><?= $ticket->movie_day ?> : <?= $ticket->movie_time ?> </p>
               <p>Seat number: <?= $ticket->seat_id ?> </p>
            <?php } ?>
    </div> -->

    <!-- <div class="container2">
        <div class="row">
            <?php foreach ($tickets as $index => $ticket) : ?>
                <?php $movie = new \app\models\Movie(); ?>
                <?php $movie = $movie->getById($ticket->movie_id); ?>
                <div class="col-md-6">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><?= $movie->title ?></h5>
                            <p class="card-text">Day: <?= $ticket->movie_day ?></p>
                            <p class="card-text">Time: <?= $ticket->movie_time ?></p>
                            <p class="card-text">Seat Number: <?= $ticket->seat_id ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div> -->


        <!-- <div class="container2">
        <div class="row">
            <?php 
                foreach ($tickets as $index => $ticket) : 
                    $movie = new \app\models\Movie();
                    $movie = $movie->getById($ticket->movie_id);
            ?>
                <div class="col-md-6">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><?= $movie->title ?></h5>
                            <p class="card-text">Day: <?= $ticket->movie_day ?></p>
                            <p class="card-text">Time: <?= $ticket->movie_time ?></p>
                            <p class="card-text">Seat Number: <?= $ticket->seat_id ?></p>
                            <p class="card-text">$10</p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="row justify-content-end">
            <div class="col-md-6">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Total Price</h5>
                        <p class="card-text">Total: $</p>
                        <a href="/checkout" class="btn btn-primary">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <div class="container2">
        <ul class="list-group">
            <?php 
                foreach ($tickets as $index => $ticket) : 
                    $movie = new \app\models\Movie();
                    $movie = $movie->getById($ticket->movie_id);
            ?>
                <li class="list-group-item">
                    <h5 class="card-title"><?= $movie->title ?></h5><br>
                    <p class="card-text"><?= $ticket->movie_day ?> : <?= $ticket->movie_time ?> </p>
                    <p class="card-text">Seat Number: <?= $ticket->seat_id ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
            <div class="row justify-content-end mt-4">
            <div class="col-md-6">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Total Price</h5>
                        <p class="card-text">Total: $</p>
                        <a href="/checkout" class="btn btn-primary">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>


</html>