
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Review Approvals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Admin Review Approvals</h1>
    <div class="reviews">
        <table class="table">
            <thead>
            <tr>
                <th>Movie Title</th>
                <th>Review Text</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($reviews as $review): ?>
                <tr>
                    <td><?= $review->movie_title ?></td>
                    <td><?= $review->review_text ?></td>
                    <td>
                        <form action="/Admin/approveReview" method="POST">
                            <input type="hidden" name="review_id" value="<?= $review->review_id ?>">
                            <button type="submit" class="btn btn-success">Approve</button>
                        </form>
                        <form action="/Admin/rejectReview" method="POST">
                            <input type="hidden" name="review_id" value="<?= $review->review_id ?>">
                            <button type="submit" class="btn btn-danger">Reject</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
