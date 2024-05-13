<!DOCTYPE html>
<html>

<head>
    <title><?= __('Movie Theatre') ?></title>
    <style><?php include 'app/css/movie.css'; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<!-- Navigation Bar -->
<nav>
    <a href="/User/adminProfile"><?= __('Account') ?></a> &nbsp&nbsp
    <a href="/Movie/index"><?= __('Movies') ?></a>
</nav>

<body class="body">

    <!-- Header Section-->
    <header>
        <h1><?= __('Add a New Movie')?></h1>
    </header><br><br>

    <!-- Register Section -->
    <div class="container">
        <br><br>

        <form action="" method="post">
            <h1><?= __('Movie Information') ?></h1>
            <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="<?= __('Title') ?>" required>
            </div><br>

            <div class="form-group">
                <input type="text" class="form-control" name="image" placeholder="<?= __('Source link of the Cover Image')?>" required>
            </div><br>

             <div class="form-group">
                <input type="text" class="form-control" name="director" placeholder="<?= __('Director Name')?>" required>
            </div><br>

            <div class="form-group">
				<label><?= __('Synopsis:')?></label><textarea  class="form-control" name="description" rows="4" columns="50" ></textarea>
			</div><br>

            <div class="form-group">
                <input type="number" class="form-control" name="length" placeholder="<?= __('Length (minutes)')?>" required>
            </div><br>

              <div class="form-group">
                <input type="date" name="release_date" value="2024-04-22" min="2024-04-22" max="2024-12-31" />
            </div><br>

             <div class="form-group">
                <input type="text" class="form-control" name="trailer" placeholder="<?= __('Link to the trailer')?>" required>
            </div><br>
           
           <h1><?= __('Add a Screening Time') ?></h1>
           <div class="form-group">
           <select name="days" id="days">
              <option value="Sunday"><?= __('Sunday')?></option>
              <option value="Monday"><?= __('Monday')?></option>
              <option value="Tuesday"><?= __('Tuesday')?></option>
              <option value="Wednesday"><?= __('Wednesday')?></option>
              <option value="Thursday"><?= __('Thursday')?></option>
              <option value="Friday"><?= __('Friday')?></option>
              <option value="Saturday"><?= __('Saturday')?></option>
            </select>
            </div><br>

            <div class="form-group">
              <select name="times" id="times">
              <option value="1:00">1:00</option>
              <option value="3:20">3:20</option>
              <option value="6:30">6:30</option>
              <option value="7:05">7:05</option>
              <option value="8:20">8:20</option>
              <option value="9:15">9:15</option>
              <option value="10:00">10:00</option>
            </select>
            </div><br>

        
        <div class="form-group">
            <input type="submit" name="action" class="addbutton" value="<?= __('Add Movie')?>"/><br><br>
            <a href=""><?= __('Cancel') ?></a>
        </div><br>
        </form>
    </div>

    <footer>
        <br>Copyright &copy 2024 
    </footer>
</body>

</html>