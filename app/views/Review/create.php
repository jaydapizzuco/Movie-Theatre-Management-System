<!DOCTYPE html>
<html lang="en">

<head>
    <title>Movie Theatre</title>
    <style><?php include 'app/css/movie.css'; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<!-- Navigation Bar -->
<nav>
    <a href="/User/profile">Account</a> &nbsp&nbsp
    <a href="/Movie/index">Movies</a>
</nav>

<body>

    <!-- Header Section-->
    <header>
        <h1>Create a Review</h1>
    </header><br><br>

    <!-- Register Section -->
    <div class="container">
        <br><br>

        <form action="" method="post">
            <h1>Review Information</h1>
            <div class="form-group">
                <input type="text" class="form-control" name="stars" placeholder="Number of Stars" required>
            </div><br>

            <div class="form-group">
                <input type="text" class="form-control" name="review_text" placeholder="Review Text..." required>
            </div><br>
        
            <div class="form-group">
                <input type="submit" name="action" value="Submit Review for Approval"/><br><br>
                <a href="/User/profile">Cancel</a>
            </div><br>
        </form>
    </div>

    <footer>
        <br>Copyright &copy 2024 
    </footer>
</body>