<!DOCTYPE html>
<html>

<head>
    <title><?= __('Movie Theatre') ?></title>
    <style><?php include 'app/css/movie.css'; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<!-- Navigation Bar -->
<nav>
    <a href="/User/profile"><?= __('Account') ?></a> &nbsp&nbsp
    <a href="/Movie/index"><?= __('Movies') ?></a>
</nav>

<body>
    <?php 
        $movie = new \app\models\Movie();
        $movie = $movie->getByID($data->movie_id);
    ?>

    <!-- Header Section-->
    <header>
        <h1><?= __( $data->title) ?></h1>
    </header><br><br>
 
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <img src="<?= $data->image ?>" class="movie-image" alt="<?= $data->title ?>">
                <h2><?= __($data->title) ?></h2>
                <p><strong>Director:</strong> <?= $data->director ?></p>
                <p><strong>Description:</strong> <?= $data->description ?></p>
                <p><strong>Trailer:</strong> <?= $data->trailer ?></p>
                <p><strong>Length:</strong> <?= $data->length ?> minutes </p>
                <p><strong>Release Date:</strong> <?= $data->release_date ?></p>

                <p><strong>Revenue:</strong> $<?= $data->ticket_revenue ?></p>
            </div>
        </div>
    </div><br><br>

    <div class="container">
        <h1>Screenings</h1>
        <?php 
            $schedule = new \app\models\MovieSchedule();
            $screenings = $schedule->getByMovieID($data->movie_id);
        ?>

        <?php 
            foreach ($screenings as $index => $screening) { ?>
               <h2><?= $screening->day ?> : <?= $screening->getTime($screening->time_id)?></h2>
            <?php } ?>

            <a href='Movie/update?id=<?= $movie->movie_id ?>'> <h2><?= __('Update Information') ?></h2></i></a>
            <a href='Movie/update?id=<?= $movie->movie_id ?>'> <h2><?= __('Update Information') ?></h2></i></a>
            <a href="/Review/index?movie_id=<?= $movie->movie_id ?>" class="btn btn-primary"><?= __('View Reviews') ?></a>
             </div><br><br>
    </form>
</div>

    <footer>
        <br><?= __('Copyright &copy 2024') ?> 
    </footer>
</body>

</html>
