<?php include "inc/Data.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$page?></title>
    <!-- Link Style Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom border-5 border-info shadow" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">School Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link <?= ($page == 'My School Library') ? 'active fw-bold' : '' ?>" href="index.php">Home</a>
                    <a class="nav-link <?= ($page == 'About Library') ? 'active fw-bold' : '' ?>" href="About.php">About</a>
                    <a class="nav-link <?= ($page == 'All Books') ? 'active fw-bold' : '' ?>" href="Books.php">Books</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->