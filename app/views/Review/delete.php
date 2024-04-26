<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Review</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Delete Review</h1>
    <div class="reviews">
        <?php foreach ($reviews as $review): ?>
            <div class="review">
                <h3><?= $review->movie_title ?></h3>
                <p><?= $review->review_text ?></p>
                <form action="/Review/delete" method="POST">
                    <input type="hidden" name="review_id" value="<?= $review->review_id ?>">
                    <button type="submit" class="btn btn-danger">Delete Review</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

