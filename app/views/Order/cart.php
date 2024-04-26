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
               <!-- day,time,seats -->
               <p><?= $ticket->movie_day ?> : <?= $ticket->movie_time ?> </p>
               <p>Seat number: <?= $ticket->seat_id ?> </p>
            <?php } ?>

</body>


</html>