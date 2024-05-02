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
    <?php 
        $movie = new \app\models\Movie();
        $movie = $movie->getByID($data->movie_id);
    ?>

    <!-- Header Section-->
    <header>
        <h1><?= $data->title ?></h1>
    </header><br><br>
 
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <img src="<?= $data->image ?>" class="movie-image" alt="<?= $data->title ?>">
                <h2><?= $data->title ?></h2>
                <p><strong><?= __('Director:')?></strong> <?= $data->director ?></p>
                <p><strong><?= __('Description:')?></strong> <?= $data->description ?></p>
                <p><strong><?= __('Trailer:')?></strong> <?= $data->trailer ?></p>
                <p><strong><?= __('Length:')?></strong> <?= $data->length ?> minutes</p>
                <p><strong><?= __('Release Date:')?></strong> <?= $data->release_date ?></p>
            </div>
        </div>
    </div><br><br>

    <div class="container">
        <h1><?= __('Screenings')?></h1>
        <?php 
            $schedule = new \app\models\MovieSchedule();
            $screenings = $schedule->getByMovieID($data->movie_id);
        ?>

        <?php 
            foreach ($screenings as $index => $screening) { ?>
               <h2><?= $screening->day ?> : <?= $screening->getTime($screening->time_id)?></h2>
            <?php } ?>
             <a href='/Ticket/selectScreening?id=<?= $movie->movie_id ?>'> <h2>Book Tickets</h2></i></a>
             <a href="/Review/index?movie_id=<?= $movie->movie_id ?>" class="btn btn-primary">View Reviews</a>
             </div><br><br>
    </form>
</div>

    <footer>
        <br>Copyright &copy 2024 
    </footer>
</body>

</html>
