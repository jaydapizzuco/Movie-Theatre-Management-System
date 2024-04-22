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
    <a href="/User/profile">Account</a> &nbsp&nbsp
    <a href="/Movie/index">Movies</a>
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
        <img src='<?= $data->image ?>' class='zoom' width='100' height='100' alt="<?= $data->image ?>">
         <p><?= $data->title ?> </p>
        <p><?= $data->director ?></p>
        <p><?= $data->description ?></p>
    </div>


    <footer>
        <br>Copyright &copy 2024 
    </footer>
</body>

</html>