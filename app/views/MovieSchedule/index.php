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
    <a href="/User/adminProfile">Account</a> &nbsp&nbsp
    <a href="/Movie/index">Movies</a>
</nav>

<body>

     <?php 
        $movie = new \app\models\Movie();
        $movie = $movie->getByID($data->movie_id);
        ?>

    <!-- Header Section-->
    <header>
         <h1>Screening Times for <?= $movie->title ?></h1>
    </header><br><br>

    <!-- Register Section -->
    <div class="container">
        <br><br>
        <a href='/MovieSchedule/create?id=<?= $movie->movie_id ?>'><h2>Add a New Screening Time</h2></a>
            <h2>Existing Screening Times</h2>
            <?php 
            $schedule = new \app\models\MovieSchedule();
            $screenings = $schedule->getByMovieID($data->movie_id);
        ?>

        <?php 
            foreach ($screenings as $index => $screening) { ?>
               <h3><?= $screening->day ?> : <?= $screening->getTime($screening->time_id)?>
                <a href='/MovieSchedule/delete?id=<?= $screening->schedule_id ?>'><i class='bi bi-trash'></i></a>
                </h3>
            <?php } ?>
        </form>
    </div>

    <footer>
        <br>Copyright &copy 2024 
    </footer>
</body>

</html>