<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Review</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background: #f0f0f0;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            font-size: 24px;
        }

        header nav ul {
            list-style: none;
            display: flex;
        }

        header nav ul li {
            padding: 0 10px;
        }

        header nav ul li a {
            text-decoration: none;
            color: #333;
        }

        main {
            flex: 1;
            padding: 20px;
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
        }

        .movie-cover {
            flex-basis: 20%;
            text-align: center;
            padding: 10px;
            background: lightblue;
        }

        .review-form {
            flex-basis: 70%;
            padding: 10px;
        }

        footer {
            background: #f0f0f0;
            padding: 10px 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Modify Review for <?= $data->title ?></h1>
        <nav>
            <ul>
                <li><a href="/Movie/index">Movies</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="/User/profile">Account</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="movie-cover">
            <img src="<?= $data->image ?>" alt="<?= $data->title ?>" style="max-width: 100%;">
        </section>
        <section class="review-form">
            <form action="/Review/update" method="POST">
                <input type="hidden" name="review_id" value="<?= $data->review_id ?>">
                <div class="mb-3">
                    <label for="stars" class="form-label">Stars</label>
                    <input type="number" class="form-control" id="stars" name="stars" min="1" max="5" required>
                </div>
                <div class="mb-3">
                    <label for="review_text" class="form-label">Review Text</label>
                    <textarea class="form-control" id="review_text" name="review_text" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit Review</button>
            </form>
        </section>
    </main>
    <footer>
        <p>Footer</p>
    </footer>
</body>
</html>
