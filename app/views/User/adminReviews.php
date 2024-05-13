<!DOCTYPE html>
<html>
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
    <a href="/User/adminProfile"><?= __('Account')?></a> &nbsp&nbsp
    <a href="/Movie/index"><?= __('Movies')?></a>
</nav>
</head>
<body class="body">
    <header>
        <h1><?= __('Admin Reviews')?></h1>
    </header>
    <?php if (!empty($reviews) && is_array($reviews)) : ?>
    <div class="review-container">
        <?php foreach ($reviews as $review) : ?>
            <div class="review-item">
                <p><?= __('Review ID: ')?><?php echo $review->review_id; ?></p>
                <p><?= __('User ID: ')?><?php echo $review->user_id; ?></p>
                <p><?= __('Movie ID: ')?><?php echo $review->movie_id; ?></p>
                
                <div class="review-actions">
                    
                    <form action="/Review/approve" method="post">
                        <input type="hidden" name="review_id" value="<?php echo $review->review_id; ?>">
                        <button type="submit"><?= __('Approve')?></button>
                    </form>
                    <form action="/Review/reject" method="post">
                        <input type="hidden" name="review_id" value="<?php echo $review->review_id; ?>">
                        <button type="submit"><?= __('Reject')?></button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php else : ?>
    <p><?= __('there are no reviews')?></p>
<?php endif; ?>

    <footer>
       
    </footer>
</body>
</html>
