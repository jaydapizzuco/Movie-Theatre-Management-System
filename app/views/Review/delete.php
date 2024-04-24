

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Review</title>

    <style>
        <?php include 'app/css/movie.css'; ?>
    </style>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h2>Delete Review</h2>

    <?php if (!empty($review)) : ?>
        <div class="review-container">
            <div class="review">
                <p><strong>User ID:</strong> <?php echo $review->user_id; ?></p>
                <p><strong>Movie ID:</strong> <?php echo $review->movie_id; ?></p>
                <p><strong>Stars:</strong> <?php echo $review->stars; ?></p>
                <p><strong>Review Text:</strong> <?php echo $review->review_text; ?></p>
            </div>

          
            <form method="POST" action="/Review/delete">
                <input type="hidden" name="review_id" value="<?php echo $review->review_id; ?>">
                <button type="submit" class="btn btn-danger">Delete Review</button>
            </form>
        </div>
    <?php else : ?>
        <p>review not there</p>
    <?php endif; ?>

  
</body>

</html>
