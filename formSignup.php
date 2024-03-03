<?php 

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  return header("location:signup.php?methodError=Please%20re-submit%20the%20form");
}

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

include_once('validation.php');

$errors = [];


if (emptyUsernameCheck($username)) {
   $errors['emptyUsernameErrorMessage'] = "Username is required";
}

if (emptyPasswordCheck($password)) {
  $errors['emptyPasswordErrorMessage'] = "Password is required";
}

if (emptyEmailCheck($email)) {
  $errors['emptyEmailErrorMessage'] = "Email is required";
}


$validEmail = explode('@', $email);
$validEmailCheck = $validEmail[0];
if (empty($errors['emptyEmailErrorMessage'])) {
    if (validateEmailCharacters($validEmailCheck)) {
        $errors['errorEmailCharacters'] = " Email must have at least 5 characters before @";
     
    }
}
if (empty($errors['emptyPasswordErrorMessage'])) {
    if (validatePasswordCharacters($password)) {
        $errors['errorInvalidPassword'] = " Password must have at least one number, one special sign and one uppercase letter";
     
    }
}


 $userInfo = explode(PHP_EOL, file_get_contents('users.txt')) ; 

foreach ($userInfo as $userInfo) {
  $data = explode('=', $userInfo);
  $user = explode(',', $data[0]);
  if (empty($errors['emptyEmailErrorMessage'])) {
    if ($user[0] === $email) {
        $errors['errorEmailExists'] = "Email is already registered";
    }

  }

  if (empty($errors['emptyUsernameErrorMessage'])) {
      if ($user[1] === $username) {
          $errors['errorUsernameExists'] = "Username is already taken";
        
      }
      if (validateUsernameCharacters($username)) {
          $errors['errorInvalidUsername'] = "Username cannot contain empty spaces or special signs";
         
      }
  }
}


if (!empty($errors)) {
  $queryString = http_build_query($errors);
  return header("location:signup.php?" . $queryString);
}

$userData = "$email,$username=" . password_hash($password, PASSWORD_DEFAULT);


file_put_contents('users.txt', $userData . PHP_EOL, FILE_APPEND);

header('Location: welcome.php?successfulRegister=' . $username);


  
            
?>