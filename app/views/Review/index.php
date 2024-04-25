<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movie Reviews</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Reviews for <?= $movie->title ?></h1>
    <div class="movie-cover">
        <img src="<?= $movie->image ?>" alt="<?= $movie->title ?>">
    </div>
    
    <div class="review-list">
        <h2>All Reviews:</h2>
        <ul>
            <?php if (!empty($reviews)) : ?>
                <?php foreach ($reviews as $review) : ?>
                    <li><?= $review->review_text ?></li>
                <?php endforeach; ?>
            <?php else : ?>
                <li>movie has no reviews </li>
            <?php endif; ?>
        </ul>
    </div>
    <a href="/Review/create?id=<?= $movie->movie_id ?>" class="btn btn-primary">Write Review</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
