<!DOCTYPE html>
<html lang="en">

<head>
    <title>Movie Theatre</title>
    <style><?php include 'app/css/movie.css'; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<!-- Navigation Bar -->
<nav>
    <a href="/User/adminProfile">Account</a> &nbsp&nbsp
    <a href="/Movie/index">Movies</a>
</nav>

<body>

<?php 
    $movie_id = $data->movie_id;
    $movie = new \app\models\Movie();
    $movie = $movie->getByID($movie_id);
    $title= $movie->title;

    ?>
    <!-- Header Section-->
    <header>
         <h1>Are you sure you wish to delete this screening time?</h1>
    </header><br><br>

<form action="" method="post">
    <!-- Register Section -->
    <div class="container">
        <h2>Movie</h2>
        <h3><?= $title ?></h3>
        <h2>Screening Time</h2>
                    <h3><?= $data->day?> : <?= $data->getTime($data->time_id)?></h3>
                
                <div class="form-group">
                <input type="submit" name="action" value="Delete"/><br><br>
                <a href="/User/adminProfile">Cancel</a>
            </div><br>
    </div>
</form>

    <footer>
        <br>Copyright &copy 2024 
    </footer>
</body>

</html>