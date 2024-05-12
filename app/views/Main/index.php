<!DOCTYPE html>
<html>

<head>
    <title>Movie Theatre</title>
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
    <a href ="/Order/incomplete"><i class="bi bi-cart"></i></a> &nbsp&nbsp
</nav>

<body>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://mediafiles.cineplex.com/ab-test/2024/2024-04-24/abigail_desktop_wide.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.cineplex.com/_next/image?url=https%3A%2F%2Fmediafiles.cineplex.com%2Fcineplex-v2%2Fbillboard-block%2F01_FG_WEB_CINEPLEX_2560X400_ENG_DATED_F01_KM_030724_20240417133810_0.jpg&w=1920&q=100" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.cineplex.com/_next/image?url=https%3A%2F%2Fmediafiles.cineplex.com%2Fcineplex-v2%2Fbillboard-block%2FWB_Challengers_Cineplex_EN_Dated_Desktop-wide_20240424133611_0.png&w=1920&q=100" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div><br>

   <header>
        <h1><?= __('All Movies')?></h1>
    </header><br><br>

    <div class="gallery">
        <?php foreach ($data as $index => $movies): ?>
            <div class="gallery-item">
                <a name= "<?= htmlspecialchars($movies->movie_id) ?>" href="/Movie/individual?id=<?= $movies->movie_id ?>"><img src="<?= $movies->image ?>" alt="<?= $movies->title ?>" height="300px" width="150px"></a>
                <p><?= $movies->title ?></p>
            </div>
        <?php endforeach; ?>
    </div> 

</body>

<footer>
        <br><?= __('Copyright &copy 2024') ?>
</footer>

</html>