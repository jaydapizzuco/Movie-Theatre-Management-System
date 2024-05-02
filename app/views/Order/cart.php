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
    <h1><?= __('CART')?></h1>
</header>

<body>
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
                        <h5 class="card-title"><?= __('Total Price')?></h5>
                        <p class="card-text">Total: $ <?= $data->total_price ?></p>
                        <a href="/Order/checkout?id=<?= $data->order_id ?>" class="btn btn-primary"><?= __('Checkout')?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>