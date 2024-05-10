<!DOCTYPE html>
<html>

<head>
    <title><?= __('Movie Theatre')?></title>
    <style><?php include 'app/css/movie.css'; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head> 

<body>
    <!-- Navigation Bar -->
    <nav>
        <a href="/User/profile"><?= __('Account')?></a> &nbsp&nbsp
        <a href="/Main/aboutus"><?= __('About Us')?></a> &nbsp&nbsp
        <a href="/Movie/index"><?= __('Movies')?></a>
        <a name = "cart" href ="/Order/incomplete"><i class="bi bi-cart-fill"></i></a>
    </nav>

    <header>
        <h1><?= $data->name ?></h1>
    </header><br><br>

    <nav class="account">
        <a href="/User/profile"><?= __('Profile Information')?></a> &nbsp&nbsp
        <a href="/User/purchaseHistory"><?= __('Purchase History')?></a> &nbsp&nbsp
        <a class="active" href="movies.html"><?= __('Points')?></a>
        <a href="/Review/profileindex"> <?= __('Reviews')?></a> <!-- Added link to reviews/profileindex -->
    </nav><br>

    <div class="container2">
        <p><?= __('Name:')?><?= $data->name ?></p>
        <p><?= __('Email:')?> <?= $data->email ?></p>
     

        <form action="/User/update">
            <button type="submit"><?= __('Edit Profile Information')?></button>
        </form><br><br><br><br><br>

        <form action="/User/logout">
            <button type="submit"><?= __('Logout')?></button>
        </form>

        <form action="/User/setup2fa">
            <button type="submit"><?= __('Set Up 2FA')?></button>
        </form>
    </div>

    <footer>
        <br>Copyright &copy 2024 
    </footer>
</body>

</html>
