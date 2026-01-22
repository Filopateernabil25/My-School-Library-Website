<?php
$page = "Details Book";
include "inc/header.php";
$id = $_GET['id'];
$Book = $Books[$id];
?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-4 text-center">
            <img src="<?= $Book["img"] ?>" alt="" class="img-fluid rounded shadow">
        </div>

        <div class="col-md-8">
            <div class="card shadow p-4 text-center">
                <h2 class="card-title fw-bold"><?= $Book["Title"] ?></h2>
                <p class="text-muted mb-1">Author: <?= $Book["author"] ?></p>
                <p class="text-muted mb-1">Description: <?= $Book["Description"] ?></p>
                <a href="Books.php" class="btn btn-info fw-bold mt-3">Back to Library</a>
            </div>
        </div>
    </div>
</div>

<?php include "inc/footer.php"; ?>