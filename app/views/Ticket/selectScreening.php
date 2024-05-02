<!DOCTYPE html>
<html lang="en">

<head>
    <title>Movie Theatre</title>
    <style><?php include 'app/css/movie.css'; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include jQuery UI -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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

            date_default_timezone_set('America/Montreal');

            $timestamp = date("Y-m-d");
            echo $timestamp;
            $timestamp = strtotime($timestamp);
            $day = date('l', $timestamp);
            echo "The " . $day;

            $dayInt = 0;

            switch ($day) {
                case 'Sunday':
                    $dayInt = 0;
                    break;
                case 'Monday':
                    $dayInt = 1;
                    break;
                case 'Tuesday':
                    $dayInt = 2;
                    break;
                case 'Wednesday':
                    $dayInt = 3;
                    break;
                case 'Thursday':
                    $dayInt = 4;
                    break;
                case 'Friday':
                    $dayInt = 5;
                    break;
                case 'Saturday':
                    $dayInt = 6;
                    break;
                
                default:
                    // code...
                    break;
            }

        ?>

    <div class = "container">
        <h2> Select a Screening </h2>
        <form action="" method="post">
           <div class="form-group">
            <select name="screening" id="screening">
               <?php 
            foreach ($screenings as $index => $screening) { ?>
                <?php 
                    $screenDayInt = 0;
                    switch ($screening->day) {
                        case 'Sunday':
                            $screenDayInt = 0;
                            break;
                        case 'Monday':
                            $screenDayInt = 1;
                            break;
                        case 'Tuesday':
                            $screenDayInt = 2;
                            break;
                        case 'Wednesday':
                            $screenDayInt = 3;
                            break;
                        case 'Thursday':
                            $screenDayInt = 4;
                            break;
                        case 'Friday':
                            $screenDayInt = 5;
                            break;
                        case 'Saturday':
                            $screenDayInt = 6;
                            break;
                        
                        default:
                            // code...
                            break;
                    }

                    if($screenDayInt >= $dayInt){
                ?>

                <option value="<?= $screening->day ?>:<?= $screening->getTime($screening->time_id)?>"><?= $screening->day ?> : <?= $screening->getTime($screening->time_id)?></option>
            <?php }  } ?> 
             
            </select>
            <br>
            

        </div>
        <p id="confirming"></p>
        <div class="form-group">
         <input type="date" id="datePicker" min="<?= date('Y-m-d') ?>">
        </div>

        <input type="submit" name="selected" value="Select Screening"/>
    </form> 


<script>

    let options;

     window.onload = function getOptions(){
        //checking if the drop down list is populated
        options = jQuery("#screening option");

        if(options.length == 0){
            document.getElementById("confirming").innerHTML = 'There are no more screenings available this week.';
        }
    }

    $(document).ready(function(){

        $('#screening').change(function(){
            var selectedValue = $(this).val();
            var selectedDay = parseDay(selectedValue.split(':')[0]);
            console.log(selectedDay);
            enableSelectedDay(selectedDay);
        });

        function parseDay(dayString) {
            switch (dayString.toLowerCase()) {
                case 'monday':
                    return 1;
                case 'tuesday':
                    return 2;
                case 'wednesday':
                    return 3;
                case 'thursday':
                    return 4;
                case 'friday':
                    return 5;
                case 'saturday':
                    return 6;
                case 'sunday':
                    return 0;
                default:
                    return NaN;
            }
        }

        function enableSelectedDay(selectedDay) {
            var datePicker = $("#datepicker");
            datePicker.datepicker({
                beforeShowDay: function(date) {
                    var dayOfWeek = date.getDay();
                    return [dayOfWeek === selectedDay, ''];
                },
            });
        }
    });
</script>



    
</div>
    <footer>
        <br>Copyright &copy 2024 
    </footer>
</body>

</html>
