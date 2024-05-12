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
    <a name='homepage' href="/Main/index"><?= __('Home Page')?></a> &nbsp&nbsp
    <a href="/User/profile"><?= __('Account')?></a> &nbsp&nbsp
    <a href="/Main/aboutus"><?= __('About Us')?></a> &nbsp&nbsp
    <a href="/Movie/index"><?= __('Movies')?></a>
    <a href ="/Order/incomplete"><i class="bi bi-cart-fill"></i></a>
</nav>

<header>
    <h1><?= __('Thank You for Sharing Your Feedback')?></h1>
    <h2><?= __('Your review has been submitted for revision')?></h2>
</header>

<body>
    <?php 
        $movie = new \app\models\Movie();
        $movie =$movie->getById($data->movie_id);

        $user = new \app\models\User();
        $user = $user->getByID($data->user_id);
        
    ?>
    
    <div class="receipt">
        <ul class="list-group">
                <li class="list-group-item">
                    <h5 class="card-title"><?= $movie->title ?></h5><br>
                    <p class="card-text"><?= $user->name ?> </p>
                    <p class="card-text"><?= str_repeat('⭐', $data->stars) ?></p>
                    <p class="card-text"><?= $data->review_text  ?> </p>
                    <p class="card-text"><?= $data->review_date  ?> </p>
                </li>
        </ul>
        </div>


    <div class="row justify-content-center">
        <div class="col-auto">
            <a href="/Movie/index" class="btn btn-primary"><?= __('Continue Browsing')?></a>
        </div>
    </div>


</body>
</html>