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

    <!-- Header Section-->
    <header>
        <h1>Update and Delete Movies</h1>
        <h1>Add Screening Times </h1>
    </header><br><br>

    <div style="text-align: center;">
    	<?php foreach ($data as $index => $movies) { 
                if ($movies->status == 1){ ?>
                    <div style=" margin-bottom: 20px;">
                    <a href="/Movie/individual?id=<?=$movies->movie_id ?>"><img src='<?= $movies->image ?>' class='zoom' width='200' height='200' alt='<?= $movies->image ?>'></a>
                    <a href='/MovieSchedule/index?id=<?= $movies->movie_id ?>'><i class="bi bi-clock"></i></a>
                    <a href='/Movie/update?id=<?= $movies->movie_id ?>'><i class='bi-pencil-fill'></i></a>
                    <a href='/Movie/delete?id=<?= $movies->movie_id ?>'><i class='bi bi-trash'></i></a>
                    <br>
                    </div>
    		<?php } else { ?>
                 <div style=" margin-bottom: 20px">
                <a href="/Movie/individual?id=<?=$movies->movie_id ?>"><img src='<?= $movies->image ?>' class='zoom' width='100' height='100' alt='<?= $movies->image ?>'></a>
                <a href='/Movie/activate?id=<?= $movies->movie_id ?>'><i class='bi bi-arrow-repeat'></i></a>
                <br>
            </div>
                <?php } } ?>
    </div>

    <footer>
        <br>Copyright &copy 2024 
    </footer>
</body>

</html>