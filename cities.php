<?php
$page = "Cities";

include("INC/header.php");
if(isset($_GET["img_id"])){
    $img_id=$_GET["img_id"];
    $img_path=$cards_data[$img_id]["path"];
    $img_title=$cards_data[$img_id]["title"];
    $img_description=$cards_data[$img_id]["description"];
    }else{
        $def_city=["img_path"=>$cards_data[3]["path"],"img_title" => $cards_data[3]["title"],"img_desc"=>$cards_data[3]["description"]];
    };
?>



<div class="container">


    <section class="p-5 bg-light rounded">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="IMG/<?=$img_path??$def_city["img_path"]?>" class="img-fluid rounded " alt="">
            </div>
            <div class="col-md-6">
                <h2 class="display-5 fw-bold"><?=$img_title??$def_city["img_title"]?></h2>
                <p class="lead"><?=$img_description??$def_city["img_desc"]?></p>
                <a href="index.php" class="btn btn-warning btn-lg mt-3">Back to Home</a>
            </div>
        </div>
    </section>
</div>





<?php include("INC/footer.php"); ?>