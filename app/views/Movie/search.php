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

    <form class="form-inline" action="/Movie/search" method="POST">
        <input name="search" placeholder="eg: Movie 1" >
        <input type="submit" name= "action" value="Search by Title" >
        <input type="submit" name= "action" value="Search by Description" >
    </form><br>

    <!-- Header Section-->
    <header>
        <h1>Movies from Search Results</h1>
    </header><br><br>

    <!-- Display all movies --> 
    <div id="gallery">
    	<?php 
    		foreach ($data as $index => $movies) { ?>
    			<a href="/Movie/individual?id=<?=$movies->movie_id ?>"><img src='<?= $movies->image ?>' class='zoom' width='200' height='200' alt='<?= $movies->image ?>'></a><br><br>
    		<?php } ?>

    </div>

</body>

<footer>
        <br>Copyright &copy 2024 
    </footer>

</html>