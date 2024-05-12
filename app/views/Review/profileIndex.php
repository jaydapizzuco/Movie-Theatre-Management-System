<!DOCTYPE html>
<html>
<head>
    <title><?= __('Movie Theatre')?></title>
    <style><?php include 'app/css/movie.css'; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
        }

        .navbar {
            background-color: #555;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .main-content {
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .review-box {
            background-color: #ddd;
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
            width: 300px;
            text-align: center;
        }

        .button {
            padding: 10px 20px;
            margin: 5px;
            border: none;
            color: black;
        }


        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style> -->
</head>

<nav>
     <a name='homepage' href="/Main/index"><?= __('Home Page')?></a> &nbsp&nbsp
    <a href="/User/profile"><?= __('Account')?></a> &nbsp&nbsp
    <a href="/Main/aboutus"><?= __('About Us')?></a> &nbsp&nbsp
    <a href="/Movie/index"><?= __('Movies')?></a>
    <a href ="/Order/incomplete"><i class="bi bi-cart-fill"></i></a>
</nav>

<body>

<div class="header">
    <h1>My Reviews</h1>
</div>

<div class="gallery">
    <?php
    
    $reviewsModel = new \app\models\Review();
    $reviews = $reviewsModel->getReviewsByUser($_SESSION['user_id']);

    
    if (!empty($reviews)) {
       
        foreach ($reviews as $review):
           
            $movieModel = new \app\models\Movie();
            $movie = $movieModel->getByID($review->movie_id);
            ?>
            <div class="gallery-item">
              
                <img src="<?= $movie->image ?>" alt="Movie Cover" style="width: 200px; height: 300px;">
               
                <h3><?= $movie->title ?></h3>
                
                <p><?= $review->review_text ?></p>
                <p><?= $review->review_date ?></p>
                
                <p class="stars"><?= str_repeat('⭐', $review->stars) ?></p>
               
                <div>
                    <a name= "<?= htmlspecialchars($review->review_id) ?>" href="/Review/update?id=<?= $review->review_id ?>"><button class="button"><?= __('Modify')?></button></a>
                    <a name= "delete<?= htmlspecialchars($review->review_id) ?>" href="/Review/delete?id=<?= $review->review_id ?>"><button class="button"><?= __('Delete')?></button></a>
                </div>
            </div>
        <?php
        endforeach;
    } else {
       
        echo "<p><?= __('No reviews found.')?></p>";
    }
    ?>
</div>

<div class="footer">
    <p>Footer</p>
</div>

</body>
</html>
