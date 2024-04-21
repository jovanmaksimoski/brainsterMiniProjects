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
        <a class="navbar-brand" href="./partOne.php" >Vehicle Registration</a>
        <a href="LoginPage.html" class="text-decoration-none">Login</a>
    </div>
    </div>
</nav>

<div class="container bg-light  d-flex justify-content-center text-center mt-5">
    <div class="row">
        <div class="col py-5">
            <h1>Vehicle Registration</h1>
            <h6 class="py-2">Enter your registration number to check its validity</h6>
            <form action="partOne.php" method="GET">
                <input type="text" name="search" class="form-control mt-2" placeholder="Search..." />
                <button type="submit" class=" btn btn-primary mt-3">Search</button>
              </form>
        </div>
    </div>

    
</div>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "koli";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if(isset($_GET['search'])) {
    $search = $_GET['search'];

    $sql = "SELECT * FROM vehicleregistration WHERE vehicle_chassis_number LIKE '%$search%'";
    
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<div class='table-responsive'><table class='table table-striped table-bordered'>
        
        <thead class='thead-dark table'>
            <tr>
                <th>vehicle_model</th>
                <th>vehicle_type</th>
                <th>vehicle_chassis_number</th>
                <th>vehicle_production_year</th>
                <th>registration_number</th>
                <th>fuel_type</th>
                <th>registration_to</th>
               
            </tr>
        </thead>
        <tbody>";

        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
                echo "<td>" . $row['vehicle_model'] . "</td>";
                echo "<td>" . $row['vehicle_type'] . "</td>";
                echo "<td>" . $row['vehicle_chassis_number'] . "</td>";
                echo "<td>" . $row['vehicle_production_year'] . "</td>";
                echo "<td>" . $row['registration_number'] . "</td>";
                echo "<td>" . $row['fuel_type'] . "</td>";
                echo "<td>" . $row['registration_to'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "0 results found";
    }
}

mysqli_close($conn);
?>
</body>
</html>

<?php

?>