<?php
$page = "All Books";
include "inc/header.php";
?>

<!-- Start Container -->

<div class="container my-5">
    <!-- Cards Books -->
    <div class="row">
        <h1 class="text-center mt-5">Featured Books</h1>
        <?php foreach ($Books as $id => $Book): ?>
            <div class="col-md-6 col-lg-3">
                <div class="card mt-5 shadow">
                    <img src="<?= $Book["img"] ?>" class="card-img-top" alt="">
                    <div class="card-body text-center">
                        <h5 class="card-title p-2"><?= $Book["Title"] ?></h5>
                        <a href="details.php?id=<?= $id ?>" class="btn btn-outline-secondary w-100">Learn More</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
<!-- End Container -->

<?php include "inc/footer.php"; ?>