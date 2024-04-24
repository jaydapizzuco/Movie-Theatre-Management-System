<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Reviews</title>
    <link rel="stylesheet" href="app/css/movie.css"> 
       <style>
        .review-container {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
        .review-actions {
            margin-top: 10px;
        }
    </style>
    <nav>
    <a href="/User/adminProfile">Account</a> &nbsp&nbsp
    <a href="/Movie/index">Movies</a>
</nav>
</head>
<body>
    <header>
        <h1>Admin Reviews</h1>
    </header>
    <?php if (!empty($reviews) && is_array($reviews)) : ?>
    <div class="review-container">
        <?php foreach ($reviews as $review) : ?>
            <div class="review-item">
                <p>Review ID: <?php echo $review->review_id; ?></p>
                <p>User ID: <?php echo $review->user_id; ?></p>
                <p>Movie ID: <?php echo $review->movie_id; ?></p>
                
                <div class="review-actions">
                    
                    <form action="/Review/approve" method="post">
                        <input type="hidden" name="review_id" value="<?php echo $review->review_id; ?>">
                        <button type="submit">Approve</button>
                    </form>
                    <form action="/Review/reject" method="post">
                        <input type="hidden" name="review_id" value="<?php echo $review->review_id; ?>">
                        <button type="submit">Reject</button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php else : ?>
    <p>there are no reviews </p>
<?php endif; ?>

    <footer>
       
    </footer>
</body>
</html>
