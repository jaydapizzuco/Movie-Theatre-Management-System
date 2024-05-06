<!DOCTYPE html>
<html>

<head>
    <title><?= __('Movie Theatre')?></title>
    <style><?php include 'app/css/movie.css'; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head> 

<!-- Navigation Bar -->
<nav>
    <a href="/User/profile"><?= __('Account')?></a> &nbsp&nbsp
    <a href="/Movie/index"><?= __('Movies')?></a>
     <a href ="/Order/incomplete"><i class="bi bi-cart-fill"></i></a>
</nav>

<body>
    <header>
        <?php
            $userName = new \app\models\User();
            $userName = $userName->getById($_SESSION['user_id']);
            $userName = $userName->name;
         ?>
        <h1><?= __('Orders History')?></h1>
    </header><br><br>

    <nav class="account">
        <a href="/User/profile"><?= __('Profile Information')?></a> &nbsp&nbsp
        <a href="/User/purchaseHistory"><?= __('Purchase History')?></a> &nbsp&nbsp
        <a class="active" href="movies.html"><?= __('Points')?></a>
        <a href="/Review/profileindex"><?= __('Reviews')?></a>
    
    </nav><br>

        <div class="container2">
     

        <section class="orders-list">
            <?php if (!empty($data)) : ?>
                <?php foreach ($data as $order) : ?>
                    <?php 
                        $allTickets = new \app\models\Ticket();
                        $allTickets = $allTickets->getByOrderID($order->order_id);
                    ?>

                    <div class="receipt">
                        <p><b><?= __('Order number: ')?><?= $order->order_id ?></b></p>
                        <!-- <p><?= $review->review_text ?></p> -->

                        <?php foreach ($allTickets as $ticket) : ?>
                            <?php 
                                $movie = new \app\models\Movie();
                                $movie = $movie->getByID($ticket->movie_id);
                            ?>

                            <?php
                            $date = new DateTime($ticket->movie_date);
                            $date = $date->format('F j, Y');
                            ?>
                            <br><p>  - <?= $movie->title ?> </p>
                            <p> <?= $ticket->movie_day ?> <?= $date ?> <?= $ticket->movie_time ?> </p>
                            <p><?= __('Seat ')?><?= $ticket->seat_id?> </p>
                            
                        <?php endforeach; ?>

                        <p><?= __('Price: ')?><b>$<?= $order->total_price ?></b></p>

                        <p><?= __('Order date: ')?><?= $order->order_date ?></p>
                       <?php
                    date_default_timezone_set('America/Montreal');
                    $today = date("Y-m-d");
                    $currentDayInt = date('N');

                    $counter = 0;

                    foreach ($allTickets as $ticket) {
                        $movieDayInt = date('N', strtotime($ticket->movie_date));

                        if ($today < $ticket->movie_date) {
                            $counter = $counter + 1;
                            
                        }
                    }

                    if($counter == count($allTickets)){ ?>
                        <a href='/Order/delete?id=<?= $order->order_id ?>'><i class='bi bi-trash'></i></a>
                   <?php }
                ?>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>

                <p><?= __('You have not made any orders.')?></p>

            <?php endif; ?>
        </section>
    </div>

</body>

  <!--   <footer class="footer2">
        <br>Copyright &copy 2024 
    </footer> -->

</html>