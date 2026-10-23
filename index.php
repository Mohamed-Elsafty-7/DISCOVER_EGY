<?php
$page = "Discover Egypt";

include("INC/header.php");

?>

<div class="container mt-4">

    <section class=" my-5">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">


            <div class="carousel-inner" role="listbox">
                <?php foreach ($img_data as $path): ?>
                    <div class="carousel-item <?php echo ($path == $img_data[0]) ? 'active' : ''; ?>">
                        <img src="IMG/<?= $path ?>" class="w-100 d-block" alt="Slide Image" />
                    </div>
                <?php endforeach; ?>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
    </section>


    <section class=" my-5 ">

        <h2 class="text-center mb-4">Featured Cities</h2>
        <div class="row">
            <?php foreach ($cards_data as $key => $city): ?>
                <div class="col-md-3 col-sm-6 mb-4">

                    <div class="card h-100 text-center">
                        <img src="IMG/<?= $city["path"] ?>" class="card-img-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><?= $city['title'] ?></h5>
                            <a href="cities.php?img_id=<?= $key ?> " class="btn btn-outline-info mt-auto">Learn More</a>
                        </div>
                    </div>

                </div>

            <?php endforeach ?>
        </div>

    </section>

</div>
<?php include("INC/footer.php"); ?>