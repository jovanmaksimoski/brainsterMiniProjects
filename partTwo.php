<?php
require_once("helperClass.php");
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

if ($_SESSION["role"] !== "admin") {
    echo "You don't have permission to access this page.";
    exit;
}

$conn = new mysqli(Connection::servername, Connection::username, Connection::password, Connection::database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT id, vehicle_model, vehicle_type, fuel_type FROM vehicle";

$result = mysqli_query($conn, $sql);

$options = '';
$optionsVehicleType = '';
$optionsFuelType = '';

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $options .= '<option value="' . $row['id'] . '">' . $row['vehicle_model'] . '</option>';
        $optionsVehicleType .= '<option value="' . $row['id'] . '">' . $row['vehicle_type'] . '</option>';
        $optionsFuelType .= '<option value="' . $row['id'] . '">' . $row['fuel_type'] . '</option>';
    }
} else {
    $options = '<option value="">No data available</option>';
}


$sqlTable = "SELECT * FROM vehicleregistration";
$result = mysqli_query($conn, $sqlTable);

$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);


if (isset($_POST['submit'])) {
    $vehicle_model = $_POST['vehicle_model'];
    $vehicle_chassis = $_POST['vehicle_chassis'];
    $registration_number = $_POST['registration_number'];
    $registered_to = $_POST['registered_to'];
    $vehicle_type = $_POST['vehicle_type'];
    $production_year = $_POST['production_year'];
    $fuel_type = $_POST['fuel_type'];


    $sqlIsert = "INSERT INTO vehicleregistration(`vehicle_model`, `vehicle_type`, `vehicle_chassis_number`, `vehicle_production_year`, `registration_number`, `fuel_type`, `registration_to`)  
    VALUES ('$vehicle_model','$vehicle_chassis','$registration_number','$registered_to','$vehicle_type','$production_year','$fuel_type')";

    mysqli_query($conn, $sqlIsert);;


    header("Location: partTwo.php");
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $id = $_POST['id'];


    $sql = "DELETE FROM vehicleregistration WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        // Redirect to the current page to refresh the table
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}


if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM vehicleregistration WHERE vehicle_chassis_number LIKE '%$search%'";
    $result = $conn->query($sql);
}

mysqli_close($conn);

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
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="./registration.php">Vehicle Registration</a>
        <a href="./LogOutPage.php" class="text-decoration-none">Logout</a>
    </div>
    </div>
</nav>

<div class="container-fluid ">
    <div class="row">

        <div class="col-12 py-5">
            <h1 class="text-center">Vehicle Registration</h1>

            <form action="" method="POST" class="d-flex justify-content-center align-items-center">
                <div class="col-4 px-4">
                    <label for="vehicle_model">Vehicle Model</label>
                    <select class="form-control" id="vehicle_model" name="vehicle_model">
                        <?php echo $options; ?>
                    </select>
                    <label for="vehicle_chassis">Vehicle chassis number</label>
                    <input type="text" class="form-control " id="vehicle_chassis" name="vehicle_chassis">
                    <label for="registration_number">Vehicle registration number</label>
                    <input type="tel" class="form-control" id="registration_number" name="registration_number">
                    <label for="registered_to">Registered to</label>
                    <input type="date" class="form-control" id="registered_to" name="registered_to">

                </div>
                <div class="col-4 px-4">
                    <label for="vehicle_type">Vehicle Type</label>
                    <select class="form-control" id="vehicle_type" name="vehicle_type">
                        <?php echo $optionsVehicleType; ?>
                    </select>
                    <label for="production_year">Vehicle production year</label>
                    <input type="date" class="form-control" id="production_year" name="production_year">
                    <label for="fuel_type">Fuel Type</label>
                    <select class="form-control" id="fuel_type" name="fuel_type">
                        <?php echo $optionsFuelType; ?>
                    </select>
                    <input type="submit" value="Submit" name="submit" class="btn btn-primary form-control mt-3">
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<div class="container mt-5">
    <h2>Search</h2>
    <form action="partTw0.php" method="GET">
        <input type="text" name="search" placeholder="Search..." class="form-control"/>
        <button type="submit" class="btn btn-primary mt-2">Search</button>
    </form>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>vehicle_model</th>
            <th>vehicle_type</th>
            <th>vehicle_chassis_number</th>
            <th>vehicle_production_year</th>
            <th>registration_number</th>
            <th>fuel_type</th>
            <th>registration_to</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($rows as $row): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['vehicle_model']; ?></td>
                <td><?php echo $row['vehicle_type']; ?></td>
                <td><?php echo $row['vehicle_chassis_number']; ?></td>
                <td><?php echo $row['vehicle_production_year']; ?></td>
                <td><?php echo $row['registration_number']; ?></td>
                <td><?php echo $row['fuel_type']; ?></td>
                <td><?php echo $row['registration_to']; ?></td>
                <td>
                    <form method="post" class="form-inline">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button type="submit" name="edit" class="btn btn-warning mr-1">Edit</button>
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button type="submit" name="extend" class="btn btn-success">Extend</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>

