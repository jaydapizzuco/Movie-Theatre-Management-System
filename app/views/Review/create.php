<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Write a Review</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
    $reviews = new \app\models\Review();
    $reviews = $reviews->getByMovie($data->movie_id);
     

    $movie = new \app\models\Movie();
    $movie = $movie->getByID($data->movie_id);

     ?>
<div class="container">
    <h1>Write a Review for <?= $data->title ?></h1>
    <div class="movie-cover">
        <img src="<?= $data->image ?>" alt="<?= $data->title ?>">
    </div>

    <div class="review-form">
        <form action="/Review/create" method="POST">
            <input type="hidden" name="movie_id" value="<?= $data->movie_id ?>">
            <div class="mb-3">
                <label for="stars" class="form-label">Stars</label>
                <input type="number" class="form-control" id="stars" name="stars" min="1" max="5" required>
            </div>
            <div class="mb-3">
                <label for="review_text" class="form-label">Review</label>
                <textarea class="form-control" id="review_text" name="review_text" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Review</button>
        </form>
    </div>
</div>
<a href="/Review/delete?movie_id=<?=$movie->movie_id ?>" class="btn btn-primary">View Reviews</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

