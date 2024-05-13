<!DOCTYPE html>
<html>

<head>
    <title><?= __('Movie Theatre')?></title>
    <style><?php include 'app/css/movie.css'; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<!-- Navigation Bar -->
<nav>
    <a href="/User/adminProfile"><?= __('Account')?></a> &nbsp&nbsp
    <a href="/Movie/index"><?= __('Movies')?></a>
</nav>

<body class="body">

    <header>
        <h1><?= __('Update About Us')?></h1>
    </header><br><br>

    <div class="container">
        <br><br>

        <form action="" method="post">
            <h1><?= __('Information')?></h1>

             <div class="form-group">
                <input type="text" class="form-control" name="about_email" placeholder="<?= __('Company Email')?>" value='<?= $data->about_email ?>' required>
            </div><br>

            <div class="form-group">
                <label"><?= __('Description:')?></label><textarea  class="form-control" id="description" name="description" rows="4" columns="50" value=''><?= $data->description ?></textarea>
            </div><br>

            <div class="form-group">
                <input type="submit" name="action" value="<?= __('Update')?>"/><br><br>
                <a href="/User/adminProfile"><?= __('Cancel')?></a>
            </div><br>
           
        </form>
    </div>

    <footer>
        <br>Copyright &copy 2024 
    </footer>
</body>

</html>