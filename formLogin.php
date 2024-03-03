<?php 

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  return header("location:login.php?methodError=Please%20re-submit%20the%20form");
}



$username = $_POST['username'];
$password = $_POST['password'];

$usersFile = file_get_contents('users.txt');
$users = explode(PHP_EOL, $usersFile);

foreach ($users as $users) {
  $data = explode('=', $users);
  $user = explode(",", $data[0]);
  if ($user[1] === $username && password_verify($password, $data[1])) {
      return header("location: welcome.php?successfulRegister=" . $username);
  }
}

return header("location: login.php?userError=Wrong%20username%2Fpassword%20combination");

?>  