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

    <?php foreach ($data as $incompleteOrder) { ?>

    <?php
    $tickets = new \app\models\Ticket();
    $tickets = $tickets->getByOrderID($incompleteOrder->order_id);
    ?>

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
                    <p class="card-text">Seat Number: <?= $ticket->seat_id ?></p>
                </li>
        </ul>
        <?php endforeach; ?>
        <div class="row justify-content-end mt-4">
                        <h5 class="card-title">Total Price</h5>
                        <p class="card-text">Total: $ <?= $incompleteOrder->total_price ?></p>
                        <a href="/Order/checkout?id=<?= $incompleteOrder->order_id ?>" class="btn btn-primary">Complete Order</a>  
               </div>
        </div>

<?php } ?>


    <div class="row justify-content-center">
        <div class="col-auto">
            <a href="/Movie/index" class="btn btn-primary">Continue Browsing</a>
        </div>
    </div>




</body>


</html>