<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Review</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            resize: vertical;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<h2>Modify Review</h2>

<?php if ($review) : ?>
   
    <form method="POST" action="/Review/update">
        <input type="hidden" name="review_id" value="<?= $review->review_id ?>">

        <label for="review_text">Review Text:</label>
        <textarea id="review_text" name="review_text" rows="5"><?= $review->review_text ?></textarea>
        <br>

        <input type="submit" value="Update Review">
    </form>
<?php else : ?>
    <p>Review not found </p>
<?php endif; ?>

</body>
</html>

