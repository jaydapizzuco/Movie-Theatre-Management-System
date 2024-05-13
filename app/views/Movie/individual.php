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
    <?php 
        $movie = new \app\models\Movie();
        $movie = $movie->getByID($data->movie_id);
    ?>

    <!-- Header Section-->
    <header>
        <h1><?= $data->title ?></h1>
        <a href="/Review/index?movie_id=<?= $movie->movie_id ?>" class="btn btn-primary">View Reviews</a>
    </header>
 
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <img src="<?= $data->image ?>" class="movie-image" alt="<?= $data->title ?>">
                <h2><?= $data->title ?></h2>

                <dl>
                    <dt>Director</dt>
                    <dd><?= $data->director ?></dd><br>

                    <dt>Description</dt>
                    <dd><?= $data->description ?></dd><br>

                    <dt>Trailer</dt>
                    <dd><?= $data->trailer ?></dd><br>

                    <dt>Length</dt>
                    <dd><?= $data->length ?> minutes</dd><br>

                    <dt>Release Date</dt>
                    <dd><?= $data->release_date ?></dd>
                </dl>
            </div>
        </div>
    </div>

    <div class="container">
        <h1><?= __('Screenings')?></h1>
        <?php 
            $schedule = new \app\models\MovieSchedule();
            $screenings = $schedule->getByMovieID($data->movie_id);
        ?>

        <?php 
            foreach ($screenings as $index => $screening) { ?>
               <h2><?= $screening->day ?> : <?= $screening->getTime($screening->time_id)?></h2><br>
            <?php } ?>
             <a href='/Ticket/selectScreening?id=<?= $movie->movie_id ?>' class="btn btn-primary">Book Tickets</a><br><br>
             </div><br><br>
    </form>
</div>

    <footer>
        <br>Copyright &copy 2024 
    </footer>
</body>

</html>
