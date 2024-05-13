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
    <a href="/User/adminProfile"><?= __('Account')?></a> &nbsp&nbsp
    <a href="/Movie/index"><?= __('Movies')?></a>
</nav>

<body class="body">

     <?php 
        $movie = new \app\models\Movie();
        $movie = $movie->getByID($data->movie_id);
      ?>

    <!-- Header Section-->
    <header>
         <h1><?= __('Screening Times for ')?><?= $movie->title ?></h1>
    </header><br><br>

    <!-- Register Section -->
    <div class="container">
        <br><br>
        <h2><?= __('Add a New Screening Time')?></h2>
        <form action="" method="post">
           <div class="form-group">
           <select name="days" id="days">
              <option value="Sunday"><?= __('Sunday')?></option>
              <option value="Monday"><?= __('Monday')?></option>
              <option value="Tuesday"><?= __('Tuesday')?></option>
              <option value="Wednesday"><?= __('Wednesday')?></option>
              <option value="Thursday"><?= __('Thursday')?></option>
              <option value="Friday"><?= __('Friday')?></option>
              <option value="Saturday"><?= __('Saturday')?></option>
            </select>
        </div><br>

        <div class="form-group">
             <select name="times" id="times">
              <option value="1:00">1:00</option>
              <option value="3:20">3:20</option>
              <option value="6:30">6:30</option>
              <option value="7:05">7:05</option>
              <option value="8:20">8:20</option>
              <option value="9:15">9:15</option>
              <option value="10:00">10:00</option>
            </select>
        </div><br>
        
            <div class="form-group">
                <input type="submit" name="action" class="addbutton" value="<?= __('Add')?>"/><br><br>
                <a href="/User/adminProfile"><?= __('Cancel')?></a>
            </div><br>

            <h2><?= __('Existing Screening Times')?></h2>
            <?php 
            $schedule = new \app\models\MovieSchedule();
            $screenings = $schedule->getByMovieID($data->movie_id);
        ?>

        <?php 
            foreach ($screenings as $index => $screening) { ?>
               <h3><?= $screening->day ?> : <?= $screening->getTime($screening->time_id)?> </h3>
            <?php } ?>
        </form>
    </div>

    <footer>
        <br>Copyright &copy 2024 
    </footer>
</body>

</html>