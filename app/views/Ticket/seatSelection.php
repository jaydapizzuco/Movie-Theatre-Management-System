<!DOCTYPE html>
<html lang="en">

<head>
    <title>Movie Theatre</title>
    <style><?php include 'app/css/movie.css'; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>

<!-- Navigation Bar -->
<nav>
    <a href="/User/profile">Account</a> &nbsp&nbsp
    <a href="/Movie/index">Movies</a>
</nav>

<body>
	<style>
  .seat {
    width: 50px;
    height: 50px;
    margin: 5px;
    display: inline-block;
    cursor: pointer;
  }
  .unclickable {
    pointer-events: none;
}
</style>
</head>
<body>

    <?php
        $movie = new \app\models\Movie();
        $movie = $movie->getByID($data->movie_id);
    ?>

	<header>
        <h1>Book Tickets for <?= $movie->title ?></h1>
        <h2><?= $data->day ?> : <?= $data->getTime($data->time_id)?></h2>
    </header><br><br>

 
 <div id = "selectedSeats"></div> 

    <div class = "container2">
        <form method="POST" name="form" action=""> 
    <?php
       $rows = 4;
       $cols = 10;
       $ticket = new \app\models\Ticket();
     $takenSeats = $ticket->getAllTakenSeats($data->movie_id, $data->day, $data->getTime($data->time_id)); 

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $cols; $j++) {
        $seatId = $i . $j;
        $status = in_array($seatId, $takenSeats) ? 'unavailable' : 'available';

        echo '<input type="checkbox" class="seat visually-hidden" name="seats[]" value="' . $seatId . '" id="' . $seatId . '" data-status="' . $status . '" ' . ($status === 'unavailable' ? 'disabled' : '') . '>';
        echo '<label class="seat ' . $status . '" for="' . $seatId . '"><span class="bi ' . ($status === 'unavailable' ? 'bi-square-fill' : 'bi-square') . '"></span></label>';
    }
    echo '<br>';
}
?>
            <input type="submit" name="selected" value="Book Tickets"/>
        </form> 

    <script>
      document.addEventListener("DOMContentLoaded", function() {
        var seats = document.querySelectorAll('.seat');
        seats.forEach(function(seat) {
            var icon = seat.querySelector('span');
            seat.addEventListener('click', function() {
                if (!icon.classList.contains('bi-square-fill')) {
                    icon.classList.toggle('bi-square'); 
                    icon.classList.toggle('bi-check-square-fill');
                } 
            });
        });
    });

        function getValue() {
            let checkboxes = document.getElementsByName('seats');
            let result = ""; 
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].checked) {
                  result += checkboxes[i].value + ",";
                }
            }
        }

    </script>

    <footer>
        <br>Copyright &copy 2024 
    </footer>
</body>

</html>
