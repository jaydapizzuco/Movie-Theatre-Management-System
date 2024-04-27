<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Review</title>
    
</head>
<body>

<div class="header">
    <h1>Delete Review</h1>
</div>

<div class="main-content">
    <div class="confirmation-box">
        <p>Are you sure you want to delete this review?</p>
        <p>This action cannot be undone.</p>
        <form action="/Review/delete" method="post">
            <input type="hidden" name="review_id" value="<?= $review_id ?>">
            <button type="submit" class="button delete-button">Delete</button>
            <a href="/Review/profileindex" class="button cancel-button">Cancel</a>
        </form>
    </div>
</div>

<div class="footer">
   
</div>

</body>
</html>

