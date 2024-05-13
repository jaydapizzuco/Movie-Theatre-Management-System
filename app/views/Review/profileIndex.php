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
</nav>

<body class="body">

    <header>
        <h1>My Reviews</h1>
    </header>

    <nav class="account">
        <a href="/User/profile"><?= __('Profile Information')?></a> &nbsp&nbsp
        <a name="purchaseHistory" href="/User/purchaseHistory"><?= __('Purchase History')?></a> &nbsp&nbsp
        <a name="reviewshistory" href="/Review/profileindex"> <?= __('Reviews')?></a> 
    </nav><br>

    <div class="gallery">
        <?php
            $reviewsModel = new \app\models\Review();
            $reviews = $reviewsModel->getReviewsByUser($_SESSION['user_id']);
        ?>
    
        <?php if (!empty($reviews)) : ?>
            <?php foreach ($reviews as $review) : ?>
                <?php
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
                    <a name= "<?= htmlspecialchars($review->review_id) ?>" href="/Review/update?id=<?= $review->review_id ?>"><button style="color: black;"class="button"><?= __('Modify')?></button></a>
                    <a name= "delete<?= htmlspecialchars($review->review_id) ?>" href="/Review/delete?id=<?= $review->review_id ?>"><button style="color: black;"class="button"><?= __('Delete')?></button></a>
                </div>
    </div>
        <?php endforeach; ?>

            <?php else : ?>
                <p><?= __('You have not written any reviews yet.')?></p>
            <?php endif; ?>
</div>

</body>
</html>
