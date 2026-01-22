<?php
$page = "My School Library";
include "inc/header.php";
?>
<!-- Start Container -->
<div class="container my-5">
    <!-- Start carousel -->
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner rounded ">
            <?php
            foreach ($Sliders as $id => $Slider):
            ?>
                <div class="carousel-item <?= $id == 0 ? 'active' : '' ?>">
                    <img src="<?= $Slider['img'] ?>" class="d-block w-100" alt="...">
                </div>

            <?php endforeach ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- End carousel-->

    <!-- Cards Books -->
    <div class="row">
        <h1 class="text-center mt-5">Featured Books</h1>
        <?php foreach (array_slice($Books, 0, 4) as $id => $Book): ?>
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