<?php

require_once('../Database/Connection.php');

use Database\Connection as Connection;


$ID = $_GET['ID'];
$sql = "SELECT * FROM users WHERE ID = :ID";

$database = new Connection();
$connection = $database->getConnection();
$data = $connection->prepare($sql);
$data->bindParam(":ID", $ID);
$data->execute();

$dataBaseData = $data->fetch(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Three</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<style>
    .background-three {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 60vh;
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3)), url("<?= $dataBaseData['cover_image_url'] ?>");
    }

</style>

<nav class="navbar navbar-expand-lg navbar-light bg- ">
    <a class="navbar-brand " href="./pageThree.php">Webster</a>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">


        <ul class="navbar-nav ">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#about-us">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#services">
                    <?php
                    if ($dataBaseData['services'] == 'services') {
                        echo 'Services';
                    } else if ($dataBaseData['services'] == 'products') {
                        echo 'Products';
                    } ?>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>
<div class=" container-fluid background-three  justify-content center">
    <div class="col text-center py-5">
        <h1 class="text-white display-4 py-5">
            <?= $dataBaseData['main_title_of_page'] ?>
        </h1>
    </div>
    <div class="col-12">
        <h2 class="text-center text-white  py-5">
            <?= $dataBaseData['subtitle_of_page'] ?>

        </h2>
    </div>
</div>

<div class="container-fluid py-4" id="about-us">
    <div class="col">
        <h1 class="text-center">About Us</h1>
        <p class="text-center">
            <?= $dataBaseData['something_about_you'] ?>
        </p>
        <hr>
        <p class="text-center">Tel:
            <?= $dataBaseData['your_telephone_number'] ?>

        </p>
        <p class="text-center">Location:
            <?= $dataBaseData['location'] ?>

        </p>
    </div>
</div>

<div class="container-fluid d-flex justify-content-center " id="services">
    <div class="row ">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="
            <?= $dataBaseData['image_url'] ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php
                        if ($dataBaseData['services'] == 'services') {
                            echo 'Service';
                        } else if ($dataBaseData['services'] == 'products') {
                            echo 'Product';
                        } ?> One
                    </h5>
                    <p class="card-text">
                        <?= $dataBaseData['desc_service'] ?>

                    </p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="
            <?= $dataBaseData['image_url_two'] ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php
                        if ($dataBaseData['services'] == 'services') {
                            echo 'Service';
                        } else if ($dataBaseData['services'] == 'products') {
                            echo 'Product';
                        } ?> Two
                    </h5>
                    <p class="card-text">
                        <?= $dataBaseData['desc_service_two'] ?>
                    </p>
                </div>


            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="
            <?= $dataBaseData['image_url_three'] ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php
                        if ($dataBaseData['services'] == 'services') {
                            echo 'Service';
                        } else if ($dataBaseData['services'] == 'products') {
                            echo 'Product';
                        } ?> Three
                    </h5>
                    <p class="card-text">
                        <?= $dataBaseData['desc_service_three'] ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="container-fluid" id="contact">
    <div class="row">
        <div class="col py-5">
            <h3>Contact</h3>
            <p> <?= $dataBaseData['desc_company'] ?></p>
        </div>
        <div class="col py-5">
            <form class="">
                <div class="form-group py-2">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group py-2">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>

                <div class="form-group py-2">
                    <label for="exampleFormControlTextarea1">Message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary ">Send</button>

            </form>
        </div>
    </div>
</div>

<footer class="bg-dark py-2  ">

    <ul class="justify-content-center d-flex  align-items-center">
        <li class="mx-2"><a class="ml-2" href="<?= $dataBaseData['linkedin'] ?>">LinkedIn</a></li>
        <li class="mx-2"><a href="<?= $dataBaseData['facebook'] ?>">Facebook</a></li>
        <li class="mx-2"><a href="<?= $dataBaseData['twitter'] ?>">Twitter</a></li>
        <li class="mx-2"><a href="<?= $dataBaseData['google_plus'] ?>">Google+</a></li>
        <li></li>
    </ul>

</footer>


</body>
</html>
