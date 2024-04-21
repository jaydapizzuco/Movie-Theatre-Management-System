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
    <a href="User/adminProfile">Account</a> &nbsp&nbsp
    <a href="User/adminProfile">About Us</a> &nbsp&nbsp
    <a class="active" href="User/adminProfile">Movies</a>
</nav>

<body>
    <header>
        <h1>Administrator Profile</h1>
        <h1><?= $data->name ?></h1>
    </header><br><br>

    <nav class="account">
        <a href="account.html">Profile Information</a> &nbsp&nbsp
         <a href="">Pending Reviews</a> &nbsp&nbsp
         <a href="">Movies</a> &nbsp&nbsp

    </nav><br>

    <p>Name:<?= $data->name ?></p>
    <p>Email: <?= $data->email ?></p>


     <div class="form-group">
        <a href="/Movie/create">Add a New Movie</a><br><br>
    </div><br>
  
    <div class="form-group">
        <a href="/User/logout">Logout</a><br><br>
    </div><br>

    <footer>
        <br>Copyright &copy 2024 
    </footer>
</body>

</html>