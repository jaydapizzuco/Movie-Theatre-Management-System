<!DOCTYPE html>
<html>

<head>
    <title><?= __('Movie Theatre')?></title>
    <style><?php include 'app/css/movie.css'; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<style >
    input {
      border: 2px solid currentcolor;
}
input:invalid:focus {
  background-image: linear-gradient(pink,white);
}

</style>
</head>

<header>
    <h1><?= __('Checkout')?></h1><br>
</header>

<body>


        <?php
            $allTickets = new \app\models\Ticket();
            $allTickets = $allTickets->getByOrderID($data->order_id);
        ?>

        <?php 
            foreach ($allTickets as $index => $ticket) { 
                $movie = new \app\models\Movie();
                $movie = $movie->getById($ticket->movie_id);
        ?>
        <?php } ?>


    <div class="container2">
        <!-- Ticket information section -->
        <div class="ticket-info">
            <?php foreach ($allTickets as $index => $ticket) { ?>
                <div class="ticket">
                    <?php $movie = new \app\models\Movie();
                    $movie = $movie->getById($ticket->movie_id); ?>
                    <h2><?= $movie->title ?></h2>
                    <?php
                            $date = new DateTime($ticket->movie_date);
                            $date = $date->format('F j, Y');
                            ?>
                <p> <?= $ticket->movie_day ?> <?= $date ?> <?= $ticket->movie_time ?> </p>
                    <p><?= __('Seat number: ') ?><?= $ticket->seat_id ?></p>
                </div>
            <?php } ?>
            <h3><?= __('Total cost: $ ') ?><?=  round($data->total_price, 2) ?></h3>
        </div>

        <!-- Payment form section -->
        <form action="" method="post">
            <h2 class="mt-4 mb-3"><?= __('Payment Information') ?></h2>
            <div class="mb-3">
                <input type="text" class="form-control" name="cardholder_name" placeholder="<?= __('Cardholder Name') ?>" required>
            </div>
            <div class="mb-3">
                <input type="number" class="form-control" name="card_no" min="1000000000000000" max="9999999999999999"placeholder="<?= __('Card Number') ?>" oninput="limitDigits(16,this)" required>
            </div>

             <script>
                function limitDigits(noDigits,info) {
                    if (info.value.length > noDigits) {
                        info.value = info.value.slice(0, noDigits);
                    }
                }   
            </script>

            <div class="row mb-3">
                <div class="col">
                    <select class="form-control" name="months" id="months">
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </div>
                <div class="col">
                    <select class="form-control" name="years" id="years">
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <input type="number" class="form-control" name="security_no" min="100" max="999" placeholder="<?= __('Security Number (CVC)') ?>" oninput="limitDigits(3,this)" required>
            </div>
            <div class="mb-3">
                <button type="submit" name ="pay" class="btn btn-primary"><?= __('Confirm Payment') ?></button>
            </div>
            <div class="mb-3">
                <a href="/Order/cart" class="btn btn-secondary"><?= __('Cancel') ?></a>
            </div>
        </form>
    </div>


        <footer class="footer2">
        <br>Copyright &copy 2024 
    </footer>

</body>

</html>