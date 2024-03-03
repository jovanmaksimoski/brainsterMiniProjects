<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <style>
      body {
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgb(0, 0, 0, 0.5)),
          url("./desola-lanre-ologun-zYgV-NGZtlA-unsplash.jpg");

        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
      }
      .container {
        background-color: rgba(128, 128, 128, 0.425);
      }
      label {
        color:white;
      }

      p {
        margin: 0;
      }
    </style>
    </head>
    <body>

    <div class="container w-25 form-control p-5">
    <?php
            if (!empty($_GET['methodError'])) {
                $methodError = $_GET['methodError'] ?? '';
                echo "<p class = 'alert alert-danger'>$methodError</p>";
            } 
            ?>

    <form action="formSignup.php" method="POST">
    <div class="form-group p-2">

      <?php 
     
    
        $emptyEmail = $_GET['emptyEmailErrorMessage'] ?? '';
        echo "<p class = 'text-danger'>$emptyEmail</p> ";
        $existsEmail = $_GET['errorEmailExists'] ?? '';
        echo "<p class = 'text-warning'>$existsEmail</p>";
        $errorEmailCharacters = $_GET['errorEmailCharacters'] ?? '';
        echo "<p class = 'text-danger'>$errorEmailCharacters</p>";
   
      ?>
                      
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email"  placeholder="Enter email" name="email">
  </div>
    <div class="form-group p-2">

    <?php 
    
    $emptyUsername = $_GET['emptyUsernameErrorMessage'] ?? '';
        echo "<p class = 'text-danger'>$emptyUsername</p> ";
        $existsUsername = $_GET['errorUsernameExists'] ?? '';
        echo "<p class = 'text-warning'>$existsUsername</p>";
        $errorInvalidUsername = $_GET['errorInvalidUsername'] ?? '';
        echo "<p class = 'text-danger'>$errorInvalidUsername</p>";
    ?>

    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username"  placeholder="Enter Username  ">
  </div>  
  <div class="form-group p-2">
      <?php 
      
          $emptyPassword = $_GET['emptyPasswordErrorMessage'] ?? '';
          echo "<p class = 'text-danger'>$emptyPassword</p> ";
          $errorInvalidPassword = $_GET['errorInvalidPassword'] ?? '';
          echo "<p class = 'text-danger'>$errorInvalidPassword</p> ";
      ?>
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
    <button type="submit" class="btn btn-primary mt-2">SignUp</button>
  </div>
</form>
    </div>



    </body>
   </html> 