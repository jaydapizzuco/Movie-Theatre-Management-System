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
        <h1><?= __('Orders History')?></h1>
    </header><br><br>


        <div class="container2">
            <div class="row">
            <div class="col-md-6 offset-md-3">
                <img src="<?= $data->image ?>" class="movie-image" alt="<?= $data->title ?>">
                <h2>Order ID: <?= $data->order_id ?></h2><br>

                <?php 
                    $allTickets = new \app\models\Ticket();
                    $allTickets = $allTickets->getByOrderID($data->order_id);
                ?>
                <?php foreach ($allTickets as $ticket) : ?>
                    <?php 
                        $movie = new \app\models\Movie();
                        $movie = $movie->getByID($ticket->movie_id);
                    ?>

                    <br>
                    <p><b><?= $movie->title ?></b></p>
                    <p><?= $ticket->movie_day ?> <?= $ticket->movie_time ?></p>
                    <p>Seat <?= $ticket->seat_id?> </p>
                    <br>
                            
                <?php endforeach; ?>

                <p><b><?= __('Total Price: ')?><?= $order->total_price ?></b></p>
                <p><b><?= __('Date ordered: ')?><?= $order->order_date ?></b></p>

            </div>

            <div class="form-group">
                <input type="submit" name="action" value=" <?= __('DELETE ORDER')?> "/><br><br>
                <a href="/User/purchaseHistory"><?= __('Cancel')?></a>
            </div><br>
        </div>

        </div>

    <footer>
        <br>Copyright &copy 2024 
    </footer>
</body>

</html>