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
</style>
</head>
<body>
	<header>
        <h1>Book Tickets for <?= $data->title ?></h1>
    </header><br><br>

    <?php 
            $schedule = new \app\models\MovieSchedule();
            $screenings = $schedule->getByMovieID($data->movie_id);
        ?>

          <div class = "container">
          <h2> Select a Screening </h2>
    <form action="" method="post">
           <div class="form-group">
            <select name="screening" id="screening">
               <?php 
            foreach ($screenings as $index => $screening) { ?>
                <option value="<?= $screening->day ?>:<?= $screening->getTime($screening->time_id)?>"><?= $screening->day ?> : <?= $screening->getTime($screening->time_id)?></option>
            <?php } ?> 
             
            </select>
            <br>

        </div>
    
  </div>
  <br><br>
  
  <!-- <script type="text/javascript">
     document.addEventListener("DOMContentLoaded", function() {
    var selectScreening = document.getElementById("screening");

    selectScreening.addEventListener("change", function() {
        var selectedOption = selectScreening.options[selectScreening.selectedIndex];
        var selectedValue = selectedOption.value;
        var selectedValues = selectedValue.split(":");
        var selectedDay = selectedValues[0];
        var selectedTime = selectedValues[1].selectedValues[2].selectedValues[3];
        
        // Send selected day and time to PHP script using AJAX
        var xhr = new XMLHttpRequest();
        xhr.open("POST", window.location.href, true); // Send the request to the same page
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                // Handle response from server if needed
                console.log(xhr.responseText);
            }
        };
       xhr.send("selectedDay=" + encodeURIComponent(selectedDay) + "&selectedTime=" + encodeURIComponent(selectedTime));
    });
});
  </script> -->
 
<<!-- ?php
  // Retrieve selected day and time from AJAX request
$selectedDay = isset($_POST['selectedDay']) ? $_POST['selectedDay'] : null;
$selectedTime = isset($_POST['selectedTime']) ? $_POST['selectedTime'] : null;

if ($selectedDay && $selectedTime) {
    // Use $selectedDay and $selectedTime to retrieve seat availability data
    $ticket = new \app\models\Ticket();
    $takenSeats = $ticket->getAllTakenSeats($data->movie_id, $selectedDay, $selectedTime);
    
    // Return taken seats data as JSON
    echo json_encode($takenSeats);
} else {
    // Handle case when the values are not received properly
    echo json_encode(["error" => "Selected day and time not received."]);
}
 ?>  -->
 
 <div id = "selectedSeats"></div> 

    <div class = "container2">
        <form method="POST" name="form" action=""> 
            <?php
                $rows = 4;
                $cols = 10;

                for ($i = 1; $i <= $rows; $i++) {
                    for ($j = 1; $j <= $cols; $j++) {
                        echo '<input type="checkbox" class="seat visually-hidden" name="seats[]" value="' . $i . $j . '" id="' . $i . $j . '">';
                        echo '<label class="seat" for="' . $i . $j . '"><span class="bi bi-square"></span></label>';
                    }
                    echo '<br>';
                }
            ?>
            <input type="submit" name="selected" value="Book Tickets"/>
        </form> 

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            getValue();
            var seats = document.querySelectorAll('.seat');
            seats.forEach(function(seat) {
                seat.addEventListener('click', function() {
                    var icon = this.querySelector('span');
                    icon.classList.toggle('bi-square'); 
                    icon.classList.toggle('bi-square-fill'); 
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
