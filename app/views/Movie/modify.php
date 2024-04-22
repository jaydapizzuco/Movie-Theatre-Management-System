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
    <a href="/User/adminProfile">Account</a> &nbsp&nbsp
    <a href="/Movie/index">Movies</a>
</nav>

<body>

    <!-- Header Section-->
    <header>
        <h1>Update a Movie</h1>
    </header><br><br>

    <div class="container">
        <br><br>

        <form action="" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Title" value='<?= $data->title ?>' required>
            </div><br>

            <div class="form-group">
                <input type="text" class="form-control" name="image" placeholder="Source link of the Cover Image" value='<?= $data->image ?>' required>
            </div><br>

             <div class="form-group">
                <input type="text" class="form-control" name="director" placeholder="Director Name" value='<?= $data->director ?>' required>
            </div><br>

            <div class="form-group">
				<label>Synopsis:</label><textarea  class="form-control" name="description" rows="4" columns="50" value=''><?= $data->description ?></textarea>
			</div><br>

            <div class="form-group">
                <input type="number" class="form-control" name="length" placeholder="Length (minutes)" value='<?= $data->length ?>' required>
            </div><br>

              <div class="form-group">
                <input type="date" name="release_date" value="<?= $data->release_date ?>" min="2024-04-22" max="2024-12-31"  />
            </div><br>

             <div class="form-group">
                <input type="text" class="form-control" name="trailer" placeholder="Link to the trailer" value='<?= $data->trailer ?>' required>
            </div><br>

            <div class="form-group">
                <input type="submit" name="action" value="Update"/><br><br>
                <a href="/User/adminProfile">Cancel</a>
            </div><br>
           
        </form>
    </div>

    <footer>
        <br>Copyright &copy 2024 
    </footer>
</body>

</html>