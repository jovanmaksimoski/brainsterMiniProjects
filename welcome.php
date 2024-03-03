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
        height: 100vh;
        display: flex;
        align-items: center;
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgb(0, 0, 0, 0.5)),
          url("./desola-lanre-ologun-zYgV-NGZtlA-unsplash.jpg");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
      }

      h1 {
        
        font-size:100px;
        margin: 0;
        color:white;
        text-align:center;
      }

      .container {
        border: 2px dashed white;
        padding: 100px;
      }
    </style>
</head>
<body>
  <div class="container">

    <h1>WELCOME <?= $_GET['successfulRegister']?></h1>
  </div>
</body>
</html>