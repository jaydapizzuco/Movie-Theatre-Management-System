<!DOCTYPE html>
<html>

<head>
    <title><?= __('Movie Theatre') ?></title>
    <style><?php include 'app/css/movie.css'; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<!-- Navigation Bar -->
<nav>
    <a href="/User/adminProfile"><?= __('Account') ?></a> &nbsp&nbsp
    <a href="/Movie/index"><?= __('Movies') ?></a>
</nav>
<body class="body">

    <!-- Header Section-->
    <header>
        <h1><?= __('Update and Delete Movies') ?></h1>
        <h1><?= __('Add Screening Times') ?></h1>
    </header>

    <div class="container2">
        <a href="/Movie/create" class="btn btn-primary"><?= __('Add a New Movie')?></a>
    </div>

    <div class="gallery">
        <?php foreach ($data as $index => $movies): ?>
            <div class="gallery-item">
                <a href="/Movie/adminIndividual?id=<?= $movies->movie_id ?>"><img src="<?= $movies->image ?>" alt="<?= $movies->title ?>"></a>
                <?php if ($movies->status == 1): ?>
                    <a style="color: white;" href='/MovieSchedule/index?id=<?= $movies->movie_id ?>'><i class="bi bi-clock" ></i></a>
                    <a style="color: white;"href='/Movie/update?id=<?= $movies->movie_id ?>'><i class='bi-pencil-fill'></i></a>
                    <a style="color: white;"href='/Movie/delete?id=<?= $movies->movie_id ?>'><i class='bi bi-trash'></i></a>
                <?php else: ?>
                    <a style="color: white;" href='/Movie/activate?id=<?= $movies->movie_id ?>'><i class='bi bi-arrow-repeat'></i></a>
                <?php endif; ?>
             <a style="color: white;" name="revenue<?= $movies->movie_id ?>" href='/Movie/revenue?id=<?= $movies->movie_id ?>'><i class="bi bi-cash"></i></a> 
         </div>
        <?php endforeach; ?>
    </div>

    <footer>
        <br><?= __('Copyright &copy 2024')?> 
    </footer>
</body>

</html>