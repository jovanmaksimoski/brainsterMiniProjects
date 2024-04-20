<?php
    require_once("Database/Connection.php");
    require_once("Classes/Admin.php");

    use \Database\Connection;
    use \Classes\Admin;

    if (isset($_POST['username']) && isset($_POST['password'])) {

        $connection = new Connection();
        $admin = new Admin();

        $admin->setUsername($_POST['username']);
        $admin->setPassword($_POST['password']);

        $dbConnection = $connection->getConnection();

        $authenticated = $admin->authenticateAdmin($dbConnection);

        $admin->store();

        if ($authenticated) {
            return header('Location: admin.php');
        }
        return header('Location: login-form.php?errorMessage=Credentials%20not%20valid');

    }
?>


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
<div class="container-md   d-flex justify-content-center text-center mt-5">
    <div class="row">
        <div class="col py-5 px-5 bg-light rounded">
            <h1>Login</h1>
            <form action="">
                <input type="text" class="form-control py-2 mt-3" placeholder="Username">
                <input type="password" class="form-control py-2 mt-3" placeholder="Password">
                <input type="submit" value="Login" class="btn btn-success w-100 py-2 mt-3">
            </form>
        </div>
    </div>
</div>

</body>
</html>