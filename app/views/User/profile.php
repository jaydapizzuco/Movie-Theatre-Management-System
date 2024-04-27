<!DOCTYPE html>
<html lang="en">

<head>
    <title>Movie Theatre</title>
    <style><?php include 'app/css/movie.css'; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head> 

<body>
    <!-- Navigation Bar -->
    <nav>
        <a href="/User/profile">Account</a> &nbsp&nbsp
        <a href="aboutus.html">About Us</a> &nbsp&nbsp
        <a href="/Movie/index">Movies</a>
    </nav>

    <header>
        <h1><?= $data->name ?></h1>
    </header><br><br>

    <nav class="account">
        <a href="account.html">Profile Information</a> &nbsp&nbsp
        <a href="aboutus.html ">Purchase History</a> &nbsp&nbsp
        <a class="active" href="movies.html">Points</a>
        <a href="/Review/profileindex"> Reviews   </a> <!-- Added link to reviews/profileindex -->
    </nav><br>

    <div class="container2">
        <p>Name: <?= $data->name ?></p>
        <p>Email: <?= $data->email ?></p>
     

        <form action="/User/update">
            <button type="submit">Edit Profile Information</button>
        </form><br><br><br><br><br>

        <form action="/User/logout">
            <button type="submit">Logout</button>
        </form>
    </div>

    <footer>
        <br>Copyright &copy 2024 
    </footer>
</body>

</html>
