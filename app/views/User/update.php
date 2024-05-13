<!DOCTYPE html>
<html>

<head>
    <title><?= __('Movie Theatre')?></title>
    <style><?php include 'app/css/movie.css'; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head> 

<nav>
    <a name='homepage' href="/Main/index"><i class="bi bi-house"></i></a> &nbsp&nbsp
    <a name ="account" href="/User/profile"><?= __('Account') ?></a> &nbsp&nbsp 
    <a name ="aboutus" href="/Main/aboutus"><?= __('About us') ?></a> &nbsp&nbsp
    <a name="movies" href="/Movie/index"><?= __('Movies') ?></a> &nbsp&nbsp
    <a href ="/Order/incomplete"><i class="bi bi-cart-fill"></i></a> &nbsp&nbsp
</nav>

<body class="body">
    <header>
        <h1><?= $data->name ?></h1>
    </header><br><br>

    <nav class="account">
        <a href="/User/profile"><?= __('Profile Information')?></a> &nbsp&nbsp
        <a href="/User/purchaseHistory"><?= __('Purchase History')?></a> &nbsp&nbsp
        <a href="/User/points"><?= __('Points')?></a>
    </nav><br>

    <div class="container2">
        <form method="post" action="">
            <div class="form-group">
                <label><?= __('Name: ')?><input type="text" class="form-group" name="name" placeholder="<?= __('Jon Doe')?>" value="<?= $data->name ?>"/></label>
            </div><br>    
            <div class="form-group">
                <label><?= __('Password: ')?><input type="Password" class="form-group" name="password" placeholder="<?= __('enter new password')?>"/></label>
            </div><br>
            <div class="form-group">
                <input type="submit" name="submit" value="<?= __('Submit')?>"/>
                <a href="/User/profile"></a>
            </div> 
        </form>
    </div>

    <footer>
        <br>Copyright &copy 2024 
    </footer>
</body>

</html>