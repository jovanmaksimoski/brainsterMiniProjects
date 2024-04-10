<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Three</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<style>
    .background-three {
        background-image: url("../Design/alesia-kaz-XLm6-fPwK5Q-unsplash.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 60vh;
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3)), url(../Design/alesia-kaz-XLm6-fPwK5Q-unsplash.jpg);
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg- ">
    <a class="navbar-brand " href="./pageThree.php">Webster</a>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">


        <ul class="navbar-nav ">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#about-us" >About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#services" >Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>
<div class=" container-fluid background-three  justify-content center">
    <div class="col text-center py-5">
        <h1 class="text-white display-4  py-5">This is Main Title</h1>
    </div>
    <div class="col-12">
        <h2 class="text-center text-white  py-5">This is a subtitle, it is usually bigger than the main tittle.</h2>
    </div>
</div>

<div class="container-fluid py-4" id="about-us">
    <div class="col">
        <h1 class="text-center">About Us</h1>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, perspiciatis?</p>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, perspiciatis?</p>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, perspiciatis?</p>
        <hr>
        <p class="text-center">Tel:5127156278</p>
        <p class="text-center">Location: C idaosdjiao</p>
    </div>
</div>

<div class="container-fluid d-flex justify-content-center " id="services">
    <div class="row ">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../Design/verne-ho-0LAJfSNa-xQ-unsplash.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Service One Description</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consequatur
                        iure neque pariatur ut. Alias facere odit tempore voluptate? Aspernatur atque cupiditate
                        dignissimos eaque, fugiat ipsam iste laborum mollitia nesciunt nihil odit perferendis provident
                        quisquam velit voluptatibus. Accusantium at deserunt incidunt, itaque iusto maxime minus
                        mollitia nam repellat veniam voluptas.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../Design/scott-graham-OQMZwNd3ThU-unsplash.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cupiditate
                        dolorum illo in laborum molestiae? Beatae doloribus enim maiores non?</p>
                </div>


            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../Design/israel-andrade-YI_9SivVt_s-unsplash.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Service Three Description</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A blanditiis dolores
                        incidunt laborum laudantium nisi odit, perferendis praesentium temporibus totam, vel vero!
                        Aliquid asperiores, commodi dolorem dolores doloribus eligendi esse et in, ipsa labore magni
                        modi molestias mollitia, neque officiis porro provident quaerat quasi quidem rem repellat sed
                        tempore? Expedita?</p>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="container-fluid" id="contact" >
    <div class="row">
        <div class="col py-5">
            <h3>Contact</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque eligendi laudantium omnis quae, quisquam recusandae rerum sunt suscipit veritatis voluptate! A corporis eveniet illo magni nihil, non placeat qui. Ab aliquam animi asperiores aut, consequuntur dolores ea in laboriosam laborum nam nisi nobis quaerat quibusdam quo reiciendis sapiente ut voluptatibus.</p>
        </div>
        <div class="col py-5">
            <form class="">
                <div class="form-group py-2">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group py-2">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>

                <div class="form-group py-2">
                    <label for="exampleFormControlTextarea1">Message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary ">Send</button>

            </form>
        </div>
    </div>
</div>


</body>
</html>