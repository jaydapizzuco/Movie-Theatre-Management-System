<!DOCTYPE html>
<html>

<head>
    <title><?= __('Movie Theatre')?></title>
    <style><?php include 'app/css/movie.css'; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 15px;
            width: 400px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>

</head>

<!-- Navigation Bar -->
<nav>
    <a href="/User/profile"><?= __('Account')?></a> &nbsp&nbsp
    <a href="/Movie/index"><?= __('Movies')?></a>
</nav>

<header>
    <h1><?= __($data->title . "'s Ticket Revenue") ?></h1>
</header>

<body class="body">
     <?php 
            $orders = new \app\models\Order();
            $orders = $orders->getByMovieID($data->movie_id);
        ?>

        <h1>Total Ticket Revenue: $ <?= $data->ticket_revenue ?></h1>
    <div class="container2">
        <table border="1">
            <tr>
                <th>Order Id</th>
                <th>User Id</th>
                <th>Order Date</th>
                <th>Revenue (Before Taxes)</th>
                <th>Total Price (After Taxes)</th>
            </tr>
            <?php 
                foreach ($orders as $index => $order) : 
            ?>
                <tr>
                    <td><?= $order->order_id ?></td>
                    <td><?= $order->user_id ?></td>
                    <td><?= $order->order_date ?></td>
                    <?php
                    $revenue = ($order->total_price / 13.7885) *11.99
                     ?>
                    <td>$ <?= $revenue ?> </td>
                    <td>$ <?= $order->total_price ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

</body>
</html>