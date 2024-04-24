

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Review</title>

   
    <style>
        <?php include 'app/css/movie.css'; ?>
    </style>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h2>Create Review</h2>

    <form method="POST" action="/Review/create">
        <label for="user_id">User ID:</label>
        <input type="text" name="user_id" required><br><br>

        <label for="movie_id">Movie ID:</label>
        <input type="text" name="movie_id" required><br><br>

        <label for="stars">Stars:</label>
        <input type="number" name="stars" min="1" max="5" required><br><br>

        <label for="review_text">Review Text:</label><br>
        <textarea name="review_text" rows="5" required></textarea><br><br>

        <input type="submit" value="Submit Review">
    </form>

    
</body>

</html>
