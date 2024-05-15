<!DOCTYPE html>
<html>

<head>
    <title><?= __('Movie Theatre')?></title>
    <style><?php include 'app/css/movie.css'; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head> 

<!-- Navigation Bar -->
<nav>
    <a name='homepage' href="/Main/index"><i class="bi bi-house"></i></a> &nbsp&nbsp
    <a href="/User/adminProfile"><?= __('Account')?></a> &nbsp&nbsp
    <a href="/Movie/adminIndex"><?= __('Movies')?></a>
</nav>

<body class="body">
    <header>
        <h1><?= __('Administrator Profile')?></h1>
        <h1><?= $data->name ?></h1>
    </header><br><br>

    <nav class="account">
        <a href="/User/adminProfile"><?= __('Profile Information')?></a> &nbsp&nbsp
         <a href="/Review/adminIndex"><?= __('Pending Reviews')?></a> &nbsp&nbsp
         <a href="/Movie/adminIndex"><?= __('Movies')?></a> &nbsp&nbsp
         <a href="/User/updateAbout"><?= __('About us')?></a> &nbsp&nbsp
    </nav><br>

     <div class="container2">
        <h2><?= __('Name: ')?><?= $data->name ?></h2>
        <h2><?= __('Email: ')?><?= $data->email ?></h2>

        <form action="/Movie/create">
            <button type="submit" class="addbutton"name="add"><?= __('Add a New Movie')?></button>
        </form><br>

    <form action ='/User/logout'>
            <input type="submit" name="action" class="btn btn-danger" value="<?= __('Logout')?>"/><br><br>
    </form>
     </div>

    <footer>
        <br>Copyright &copy 2024 
    </footer>
</body>

</html>