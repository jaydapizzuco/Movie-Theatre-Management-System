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

<header>
    <h1><?= __('CART')?></h1>
</header>

<body class="body">

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
                <table class="table">
                    <tr>
                        <th><?= __('Movie') ?></th>
                        <th><?= __('Date') ?></th>
                        <th><?= __('Time') ?></th>
                        <th><?= __('Seat') ?></th>
                    </tr>

                    <tr>
                        <td><?= $movie->title ?></td>
                        <td><?= $ticket->movie_day ?></td>
                        <td><?= $ticket->movie_time ?></td>
                        <td><?= $ticket->seat_id ?></td>
                    </tr>
                </table>
        </ul>
        <?php endforeach; ?>
        <div class="row justify-content-end mt-4">
            <h5 class="card-title"><?= __('Total Price: $')?><?= round($incompleteOrder->total_price, 2) ?></h5><br><br>
            <a href="/Order/checkout?id=<?= $incompleteOrder->order_id ?>" class="btn btn-primary"><?= __('Complete Order')?></a>
            <a name ="<?= $incompleteOrder->order_id ?>"href="/Order/delete?id=<?= $incompleteOrder->order_id ?>"><i class='bi bi-trash'></i></a>
        </div>
    </div>

        <?php } ?>


    <div class="row justify-content-center">
        <div class="col-auto">
            <a href="/Movie/index" class="btn btn-primary"><?= __('Continue Browsing')?></a>
        </div>
    </div>
</body>
</html>