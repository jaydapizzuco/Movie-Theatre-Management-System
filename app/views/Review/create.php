<?php
    $reviews = new \app\models\Review();
    $reviews = $reviews->getByMovie($data->movie_id);
     

    $movie = new \app\models\Movie();
    $movie = $movie->getByID($data->movie_id);

     ?>
<!DOCTYPE html>
<html>
<head>
    <title><?= __('Movie Theatre')?></title>
    <style><?php include 'app/css/movie.css'; ?></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>

<nav>
    <a name='homepage' href="/Main/index"><?= __('Home Page')?></a> &nbsp&nbsp
    <a href="/User/profile"><?= __('Account')?></a> &nbsp&nbsp
    <a href="/Main/aboutus"><?= __('About Us')?></a> &nbsp&nbsp
    <a href="/Movie/index"><?= __('Movies')?></a>
    <a href ="/Order/incomplete"><i class="bi bi-cart-fill"></i></a>
</nav>

<body class="body">

    <header>
        <h1><?= __('Write a Review for ')?><?= $data->title ?></h1>
    </header>

    <div class="container2">
    <section class="movie-cover">
        <img src="<?= $data->image ?>" alt="<?= $data->title ?>" style="max-width: 100%;">
    </section>
        
    <section class="review-form">
        <form action="/Review/create" method="POST">
            <input type="hidden" name="movie_id" value="<?= $data->movie_id ?>">

                <div class="mb-3">
                    <label for="stars" class="form-label"><?= __('Stars')?></label><br>

                    <div class="rating-box">
                  <div class="stars">
                    <i value="1" class="fa-solid fa-star"></i>
                    <i value="2" class="fa-solid fa-star"></i>
                    <i value="3" class="fa-solid fa-star"></i>
                    <i value="4" class="fa-solid fa-star"></i>
                    <i value="5" class="fa-solid fa-star"></i>
                  </div>
                </div>
                </div>
                <div class="mb-3">
                    <label for="review_text" class="form-label"><?= __('Review')?></label>
                    <textarea class="form-control" id="review_text" name="review_text" required></textarea>
                </div>
                <input type="hidden" name="stars" id="starsInput" value="0">
                <button type="submit" class="btn btn-primary"><?= __('Submit Review')?></button>
                <p id="test"></p>

            </form>
        </section>

        <script type="text/javascript">
             // Select all elements with the "i" tag and store them in a NodeList called "stars"
            const stars = document.querySelectorAll(".stars i");
            // Loop through the "stars" NodeList
            stars.forEach((star, index1) => {
              // Add an event listener that runs a function when the "click" event is triggered
              star.addEventListener("click", () => {

                document.getElementById("starsInput").value = index1 + 1;

                // Loop through the "stars" NodeList Again
                stars.forEach((star, index2) => {
                  // Add the "active" class to the clicked star and any stars with a lower index
                  // and remove the "active" class from any stars with a higher index
                  index1 >= index2 ? star.classList.add("active") : star.classList.remove("active");
                });
              });
            });

        </script>
    </body>
    <footer>
        <br>Copyright &copy 2024 
    </footer>
      </form>
    </section>
    </div>

</body>

<footer>
    <br>Copyright &copy 2024 
</footer>

</html>


