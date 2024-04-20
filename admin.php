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
        <a href="./login.php" class="text-decoration-none">Logout</a>
    </div>
    </div>
</nav>

<div class="container-fluid ">
    <div class="row">

        <div class="col-12 py-5">
            <h1 class="text-center">Vehicle Registration</h1>

            <form action=""  method="POST" class="d-flex justify-content-center align-items-center">
                <div class="col-4 px-4">
                        <label for="vehicle_model">Vehicle Model</label>
                        <select class="form-control" id="vehicle_model" name="vehicle_model">
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
                        </select>
                        <label for="production_year">Vehicle production year</label>
                        <input type="date" class="form-control" id="production_year" name="production_year">
                        <label for="fuel_type">Fuel Type</label>
                        <select class="form-control" id="fuel_type" name="fuel_type">
                        </select>
                        <input type="submit" value="Submit" class="btn btn-primary form-control mt-3">
                    </div>
            </form>
          </div>
        </div>
    </div>
</div>

</body>
</html>
