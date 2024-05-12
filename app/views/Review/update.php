<!DOCTYPE html>
<html>
<head>
    <title><?= __('Movie Theatre')?></title>
    <style><?php include 'app/css/movie.css'; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

<!--     <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background: #f0f0f0;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            font-size: 24px;
        }

        header nav ul {
            list-style: none;
            display: flex;
        }

        header nav ul li {
            padding: 0 10px;
        }

        header nav ul li a {
            text-decoration: none;
            color: #333;
        }

        main {
            flex: 1;
            padding: 20px;
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
        }

        .movie-cover {
            flex-basis: 20%;
            text-align: center;
            padding: 10px;
            background: lightblue;
        }

        .review-form {
            flex-basis: 70%;
            padding: 10px;
        }

        footer {
            background: #f0f0f0;
            padding: 10px 20px;
            text-align: center;
        }
    </style> -->
</head>

<nav>
    <a href="/User/profile"><?= __('Account')?></a> &nbsp&nbsp
    <a href="/Movie/index"><?= __('Movies')?></a>
    <a href ="/Order/incomplete"><i class="bi bi-cart-fill"></i></a>
</nav>

<body>
    <?php 

        $movie = new \app\models\Movie();
        $movie = $movie->getByID($data->movie_id);
    ?>
    <header>
        <h1><?= __('Modify Review for ')?><?= $movie->title ?></h1>
    </header>

    <body>
        <section class="movie-cover">
            <img src="<?= $movie->image ?>" alt="<?= $movie->title ?>" style="max-width: 100%;">
        </section>
        <section class="review-form">
            <form action="" method="POST">
                <input type="hidden" name="review_id" value="<?= $data->review_id ?>">
                <div class="mb-3">
                    <label for="stars" class="form-label"><?= __('Stars')?></label>
                    <input type="number" class="form-control" id="stars" name="stars" min="1" max="5" value="<?= $data->stars ?>" required>
                </div>
                <div class="mb-3">
                    <label for="review_text" class="form-label"><?= __('Review Text')?></label>
                    <textarea class="form-control" id="review_text" name="review_text" required><?= $data->review_text ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary"><?= __('Submit Review')?></button>
            </form>
        </section>
    </body>

    <footer>
        <p>Footer</p>
    </footer>
</body>
</html>
