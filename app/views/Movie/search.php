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

    <form class="form-inline" method="POST" action='/Movie/search'>
        <input name="search" placeholder="<?= __('eg: Movie 1')?>" >
        <input type="submit" name= "action" value="<?= __('Search by Title')?>" >
        <input type="submit" name= "action" value="<?= __('Search by Description')?>" >
    </form><br>

    <!-- Header Section-->
    <header>
        <h1><?= __('Movies from Search Results')?></h1>
    </header><br><br>

   <div class="gallery">
        <?php foreach ($data as $index => $movies): ?>
            <div class="gallery-item">
                <a href="/Movie/individual?id=<?= $movies->movie_id ?>"><img src="<?= $movies->image ?>" class="zoom"></a>
                <p><?= $movies->title ?></p>
            </div>
        <?php endforeach; ?>
    </div>

</body>

<footer>
        <br>Copyright &copy 2024 
    </footer>

</html>