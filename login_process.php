<?php
require_once("helperClass.php");
session_start();


// Create connection
$conn = new mysqli(Connection::servername, Connection::username, Connection::password, Connection::database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Retrieve username and password from form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query the database for user with matching username and password
    $sql = "SELECT id, username, role FROM memebers WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1){
        // Authentication successful, set session variables
        $row = mysqli_fetch_assoc($result);
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $row["username"];
        $_SESSION["role"] = $row["role"];

        // Redirect user to home page
        header("location: partTwo.php");
    } else {
        // Authentication failed, redirect back to login page
        header("location: LoginPage.html");
    }
}

mysqli_close($conn);
?>