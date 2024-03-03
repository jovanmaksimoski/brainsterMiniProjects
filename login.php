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
    <form action="formLogin.php" method="POST">
    <div class="form-group p-2">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username"  placeholder="Enter Username  ">
  </div>
  <div class="form-group p-2">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
    <button type="submit" class="btn btn-success mt-2">Login</button>
  </div>

  <?php

        if (!empty($_GET['userError'])) {
          $loginError = $_GET['userError'] ?? '';
          echo "<p class = 'mt-3 alert alert-danger'>$loginError</p>";
        }         
     ?>
</form>
    </div>



    </body>
   </html> 