<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modify Review</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Modify Your Reviews</h1>

    <?php if (!empty($reviews)) : ?>
        <ul class="list-group">
            <?php foreach ($reviews as $review) : ?>
                <li class="list-group-item">
                    <div>
                        <h3><?= $review->movie_title ?></h3>
                        <p>Stars: <?= $review->stars ?></p>
                        <p>Review Text: <?= $review->review_text ?></p>
                    </div>
                    <a href="/Review/update?id=<?= $review->review_id ?>" class="btn btn-primary">Modify Review</a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <p>No reviews found.</p>
    <?php endif; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
