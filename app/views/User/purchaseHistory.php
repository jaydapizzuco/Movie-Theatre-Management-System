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
    <a href="aboutus.html">About Us</a> &nbsp&nbsp
    <a href="/Movie/index">Movies</a>
</nav>

<body>
    <header>
        <?php
            $userName = new \app\models\User();
            $userName = $userName->getById($_SESSION['user_id']);
            $userName = $userName->name;
         ?>
        <h1>Orders History</h1>
    </header><br><br>

    <nav class="account">
        <a href="/User/profile">Profile Information</a> &nbsp&nbsp
        <a href="/User/purchaseHistory">Purchase History</a> &nbsp&nbsp
        <a class="active" href="movies.html">Points</a>
        <a href="/Review/profileindex"> Reviews</a>
    </nav><br>

        <div class="container2">
     

        <section class="orders-list">
            <?php if (!empty($data)) : ?>
                <?php foreach ($data as $order) : ?>
                    <?php 
                        $allTickets = new \app\models\Ticket();
                        $allTickets = $allTickets->getByOrderID($order->order_id);
                    ?>
                    <div class="order_single">
                        <p><b>Order number: <?= $order->order_id ?></b></p>
                        <p><?= $review->review_text ?></p>

                        <?php foreach ($allTickets as $ticket) : ?>
                            <?php 
                                $movie = new \app\models\Movie();
                                $movie = $movie->getByID($ticket->movie_id);
                            ?>

                            <br><p>  - <?= $movie->title ?>  : <?= $ticket->movie_day ?> <?= $ticket->movie_time ?> | Seat <?= $ticket->seat_id?> </p>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>

                <p>You have not made any orders.</p>

            <?php endif; ?>
        </section>
    </div>

    <footer>
        <br>Copyright &copy 2024 
    </footer>
</body>

</html>