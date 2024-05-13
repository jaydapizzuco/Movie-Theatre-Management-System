<!DOCTYPE html>
<html>

<head>
    <title><?= __('Movie Theatre')?></title>
    <style><?php include 'app/css/movie.css'; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <style>
  .seat {
    width: 50px;
    height: 50px;
    margin: 5px;
    display: inline-block;
    cursor: pointer;
  }
</style>

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
        <h1><?= __('Book Tickets for ')?><?= $data->title ?></h1>
    </header><br><br>

    <?php 
            $schedule = new \app\models\MovieSchedule();
            $screenings = $schedule->getByMovieID($data->movie_id);
        ?>

          <div class = "container">
          <h2><?= __('Select a Screening')?></h2>
    <form action="" method="post">
           <div class="form-group">
            <select name="screening" id="screening">
               <?php 
            foreach ($screenings as $index => $screening) { ?>
                <option value="<?= $screening->day ?>:<?= $screening->getTime($screening->time_id)?>"><?= $screening->day ?> : <?= $screening->getTime($screening->time_id)?></option>
            <?php } ?> 
             
            </select>
            <br>

        </div>
    
  

    <input type="submit" name="selected" value="<?= __('Select Screening')?>"/>
        </form> 


        <script type="text/javascript">
            
        </script>


</div>
</body>

</html>
