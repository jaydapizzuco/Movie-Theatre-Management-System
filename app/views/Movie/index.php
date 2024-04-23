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

    <!-- Header Section-->
    <header>
        <h1>All Movies</h1>
    </header><br><br>

    <!-- Display all movies --> 
    <div id="gallery">
    	<?php 
    		foreach ($data as $index => $movies) { ?>
    			<a href="/Movie/individual?id=<?=$movies->movie_id ?>"><img src='<?= $movies->image ?>' class='zoom' width='100' height='100' alt='<?= $movies->image ?>'><br><br>
    		<?php } ?>

    </div>

    <footer>
        <br>Copyright &copy 2024 
    </footer>
</body>

</html>