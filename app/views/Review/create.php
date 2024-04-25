<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Review</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Create Review for <?= $movie->title ?></h1>
    <div class="movie-cover">
        <img src="<?= $movie->image ?>" alt="<?= $movie->title ?>" style="max-width: 300px;">
    </div>
    <form method="POST" action="/Review/store">
        <input type="hidden" name="movie_id" value="<?= $movie->movie_id ?>">
        
        <div class="mb-3">
            <label for="stars" class="form-label">Stars:</label>
            <select class="form-select" name="stars" id="stars" required>
                <option value="1">1 Star</option>
                <option value="2">2 Stars</option>
                <option value="3">3 Stars</option>
                <option value="4">4 Stars</option>
                <option value="5">5 Stars</option>
            </select>
        </div>
        
        <div class="mb-3">
            <label for="review_text" class="form-label">Review Text:</label>
            <textarea class="form-control" name="review_text" id="review_text" rows="5" required></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit Review</button>
    </form>
    <a href="/Review/modify" class="btn btn-secondary mt-3">Modify Your Reviews</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
