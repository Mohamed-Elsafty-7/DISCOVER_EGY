<?php
$class="active fw-bold";
include("INC/data.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$page ?></title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light ">
        <div class="container">
            <a class="navbar-brand fw-bolder fs-1" href="index.php">Discover Egypt</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse  " id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0 w-100 justify-content-end">

                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page=="Discover Egypt")  ?  $class :"" ?>" href="index.php" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page=="Cities")  ?  $class :"" ?>" href="cities.php">Cities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page=="Contact")  ?  $class :"" ?>" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page=="About Us")  ?  $class :"" ?>" href="info.php">About Us</a>
                    </li>
                    
                </ul>

            </div>
        </div>
    </nav>
    <header>
        <div class=" p-4 bg-dark border-top border-3 border-warning">
            <h1 class="h1 display-3 fw-bold p-5 text-center text-warning">Discover Egypt</h1>
        </div>
    </header>