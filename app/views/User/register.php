<!DOCTYPE html>
<html>

<head>
    <title><?= __('Movie Theatre')?></title>
    <style><?php include 'app/css/movie.css'; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
 
<nav>
    <a name='homepage' href="/Main/index"><i class="bi bi-house"></i></a> &nbsp&nbsp
    <a name ="account" href="/User/profile"><?= __('Account') ?></a> &nbsp&nbsp 
    <a name ="aboutus" href="/Main/aboutus"><?= __('About us') ?></a> &nbsp&nbsp
    <a name="movies" href="/Movie/index"><?= __('Movies') ?></a> &nbsp&nbsp
    <a href ="/Order/incomplete"><i class="bi bi-cart-fill"></i></a> &nbsp&nbsp
</nav>

<body class="body">

    <!-- Header Section-->
    <header>
        <h1><?= __('Account')?></h1>
    </header><br><br>

    <!-- Register Section -->
    <div class="container3">
        <br><h2><?= __('Create an Account')?></h2><br>

        <form action="" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="<?= __('Name')?>" required>
            </div><br>

            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="<?= __('Email')?>" required>
            </div><br>

            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="<?= __('Password')?>" required>
            </div><br>

            <div class="form-group">
                <input type="password" class="form-control" name="confirmpassword" placeholder="<?= __('Confirm password')?>" required>
            </div><br>

            <div class="form-group">
                <input type="submit" name="register" class="addbutton" value="<?= __('Register')?>"/><br><br>
                <a href="/User/login"><?= __('Login')?></a>
            </div><br>
            
        </form>
    </div>

    <footer>
        <br>Copyright &copy 2024 
    </footer>
</body>

</html>