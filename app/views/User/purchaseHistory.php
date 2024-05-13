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

<body class="body">
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
        <a href="/Review/profileindex"><?= __('Reviews')?></a>
    
    </nav><br>

    <div class="container">
    <section class="orders-list">
        <?php if (!empty($data)) : ?>
            <table class="table">
                <thead>
                    <tr>
                        <th><?= __('Order Number') ?></th>
                        <th><?= __('Movie Title') ?></th>
                        <th><?= __('Date') ?></th>
                        <th><?= __('Time') ?></th>
                        <th><?= __('Seat') ?></th>
                        <th><?= __('Price') ?></th>
                        <th><?= __('Order Date') ?></th>
                        <th><?= __('Cancel') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $order) : ?>
                        <?php 
                            $allTickets = new \app\models\Ticket();
                            $allTickets = $allTickets->getByOrderID($order->order_id);
                        ?>
                        <?php foreach ($allTickets as $ticket) : ?>
                            <?php 
                                $movie = new \app\models\Movie();
                                $movie = $movie->getByID($ticket->movie_id);
                            ?>
                            <?php
                                $date = new DateTime($ticket->movie_date);
                                $date = $date->format('F j, Y');
                            ?>
                        
                        <tr>
                            <td><?= $order->order_id ?></td>
                            <td><?= $movie->title ?></td>
                            <td><?= $date ?></td>
                            <td><?= $ticket->movie_time ?></td>
                            <td><?= $ticket->seat_id ?></td>
                            <td>$<?= $order->total_price ?></td>
                            <td><?= $order->order_date ?></td>
                            <td>
                                
                        <?php
                            date_default_timezone_set('America/Montreal');
                            $today = date("Y-m-d");
                            $counter = 0;
                            foreach ($allTickets as $ticket) {
                                if ($today < $ticket->movie_date) {
                                    $counter++;
                                }
                            }
                                
                            if ($counter == count($allTickets)) { ?>
                                <a name="delete" href='/Order/delete?id=<?= $order->order_id ?>'><i class='bi bi-trash' style="color:black;"></i></a>
                            <?php } ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p><?= __('You have not made any orders.') ?></p>
    <?php endif; ?>
</section>
</div>

</body>
</html>