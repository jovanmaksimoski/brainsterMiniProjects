<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vehicle Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="./registration.php">Vehicle Registration</a>
        <a href="./login.php" class="text-decoration-none">Login</a>
    </div>
    </div>
</nav>

<div class="container bg-light  d-flex justify-content-center text-center mt-5">
    <div class="row">
        <div class="col py-5">
            <h1>Vehicle Registration</h1>
            <h6 class="py-2">Enter your registration number to check its validity</h6>
            <form action="">
                <input type="text" class="form-control" placeholder="Registration Number">
                <input type="submit" value="Search" class="btn btn-primary mt-3">
            </form>
        </div>
    </div>
</div>

</body>
</html>


<?php
