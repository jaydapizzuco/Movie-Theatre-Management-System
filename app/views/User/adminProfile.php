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

<body>
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
        <p><?= __('Name: ')?><?= $data->name ?></p>
        <p><?= __('Email: ')?><?= $data->email ?></p>

        <form action="/Movie/create">
            <button type="submit" name="add"><?= __('Add a New Movie')?></button>
        </form><br><br><br><br><br>

    <form action ='/User/logout'>
        <div class="form-group">
            <input type="submit" name="action" value="Logout"/><br><br>
        </div><br>
    </div>
    </form>

    <footer>
        <br>Copyright &copy 2024 
    </footer>
</body>

</html>