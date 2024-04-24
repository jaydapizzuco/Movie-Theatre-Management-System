<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews  Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #f1f1f1;
            padding: 10px;
            text-align: center;
        }

        .navbar {
            overflow: hidden;
            background-color: #333;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .main-content {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            padding: 20px;
        }

        .movie-cover {
            background-color: #8bb9e0;
            width: 200px;
            height: 300px;
            text-align: center;
            padding-top: 270px;
            color: white;
            margin-right: 20px;
        }

        .reviews-section {
            flex-grow: 1;
        }

        .review {
            background-color: #333;
            color: white;
            margin: 10px 0;
            padding: 10px;
        }

        .footer {
            background-color: #f1f1f1;
            padding: 10px;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>


    <div class="navbar">
        <a href="#movies">Movies</a>
        <a href="#about">About Us</a>
        <a href="#account">Account</a>
        <div style="float:right;">
           
        </div>
    </div>

    <div class="main-content">
        <div class="movie-cover" style="background-image: url('<?= $movie->image ?>');">
       
            <h2 style="margin-top: 250px;"><?= $movie->title ?></h2>
        </div>

        <div class="reviews-section">
            <h2>Reviews</h2>
            <?php 
               
                if ($reviews) {
                    foreach ($reviews as $review) {
                        echo '<div class="review">';
                        echo '<p><strong>Stars:</strong> ' . $review->stars . '</p>';
                        echo '<p><strong>Review Date:</strong> ' . $review->review_date . '</p>';
                        echo '<p><strong>Review Text:</strong> ' . $review->review_text . '</p>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>this movie has no review.</p>';
                }
            ?>
        </div>
    </div>

    <div class="footer">
        <p>Footer</p>
    </div>

</body>

</html>
