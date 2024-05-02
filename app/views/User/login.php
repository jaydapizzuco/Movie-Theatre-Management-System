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
    <a href="/User/profile"><?= __('Account')?></a> &nbsp&nbsp
    <a href="aboutus.html"><?= __('About Us')?></a> &nbsp&nbsp
    <a href="/Movie/index"><?= __('Movies')?></a>
</nav>

<body>

    <!-- Header Section-->
    <header>
        <h1><?= __('Account')?></h1>
    </header><br><br>

    <!-- Log In Section -->
    <div class="container3">
        <br><h2><?= __('Login')?></h2><br>

        <form action="" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="<?= __('email')?>" required>
            </div><br>

            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="<?= __('password')?>" required>
            </div><br>

            <div class="form-group">
                <input type="submit" name="action" value="Login"/><br><br>
                <a href="/User/register"><?= __('Create Account')?></a>
            </div><br>
            
        </form>
    </div>

    <footer>
        <br>Copyright &copy 2024 
    </footer>
</body>

</html>