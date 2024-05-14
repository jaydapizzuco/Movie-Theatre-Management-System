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

    <form action="" class="form "method="GET" id="languageForm">
        <button class="langButton" type="submit" name="lang" value="en"><?= __('English') ?></button>
        <button class="langButton" type="submit" name="lang" value="fr"><?= __('French') ?></button>
    </form>
</nav>


<body class="body">
    <form class="search-form d-flex justify-content-end mt-3" method="POST" action='/Movie/search'>
        <input type="search" class="form-control me-2" name="search" placeholder="<?= __('eg: Movie 1') ?>">
        <input type="submit" class = "addbutton" name='action' value="<?= __('Search')?>" >
    </form><br>

    <!-- Header Section-->
    <header>
        <h1><?= __('All Movies')?></h1>
    </header><br><br>
    

    <div class="gallery">
        <?php foreach ($data as $index => $movies): ?>
            <div class="gallery-item">
                <a name= "<?= htmlspecialchars($movies->movie_id) ?>" href="/Movie/individual?id=<?= $movies->movie_id ?>"><img src="<?= $movies->image ?>" alt="<?= $movies->title ?>"></a>
                <p><?= $movies->title ?></p>
            </div>
        <?php endforeach; ?>
    </div>

</body>

<footer>
        <br>Copyright &copy 2024 
    </footer>

</html>