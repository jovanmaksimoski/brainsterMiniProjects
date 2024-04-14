
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Two</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid background-two d-flex justify-content-center">
    <div class="row">
        <div class="text-center">
            <h1 class="fw-bold py-3 mt-4 text-muted">You are one step away from your webpage</h1>
        </div>
        <div class="container-fluid ">

            <form action="formAction.php" method="POST"
                  class=" d-flex justify-content-center rounded  form-group justify-content-space-around px-5 ">
                <!--First form-->
                <div class="col-md-3 py-5 px-5 bg-light ">
                    <label for="cover_image_url" class="mb-2">Cover Image URL</label>
                    <input type="text" class="form-control" id="cover_image_url" name="cover_image_url" required>


                    <label for="main_title_of_page" class="mb-2">Main Title of Page</label>
                    <input type="text" class="form-control" id="main_title_of_page" name="main_title_of_page" required>


                    <label for="subtitle_of_page" class="mb-2">Subtitle of Page</label>
                    <input type="text" class="form-control" id="subtitle_of_page" name="subtitle_of_page" required>


                    <label for="something_about_you" class="mb-2">Something about you</label>
                    <textarea name="something_about_you" id="something_about_you" cols="30" rows="2"
                              class="form-control" required></textarea>


                    <label for="your_telephone_number" class="mb-2">Your telephone number</label>
                    <input type="tel" id="your_telephone_number" name="your_telephone_number" class="form-control" required>


                    <label for="location" class="mb-2">Location</label>
                    <input type="text" id="location" name="location" class="form-control" required>


                    <label for="services" class="mt-5">Do you provide services or products?</label>
                    <select class="form-select " aria-label="Services" name="services" id="services" required>
                        <option value="services">Services</option>
                        <option value="products">Products</option>
                    </select>

                </div>


                <!--Second form-->
                <div class="col-md-3 py-5 px-5 bg-light">
                    <p>Provide url for an image and description of your service/product:</p>
                    <label for="image_url" class="mb-2">Image URL</label>
                    <input type="text" class="form-control" id="image_url" name="image_url"  required >


                    <label for="desc_service" class="mb-2">Description of service/product</label>
                    <textarea name="desc_service" id="desc_service" cols="30" rows="2"
                              class="form-control" required ></textarea>

                    <label for="image_url_two" class="mb-2">Image URL</label>
                    <input type="text" class="form-control" id="image_url_two" name="image_url_two" required>

                    <label for="desc_service_two" class="mb-2">Description of service/product</label>
                    <textarea name="desc_service_two" id="desc_service_two" cols="30" rows="2"
                              class="form-control" required></textarea>

                    <label for="image_url_three" class="mb-2">Image URL</label>
                    <input type="text" class="form-control" id="image_url_three" name="image_url_three" required>


                    <label for="desc_service-three" class="mb-2">Description of service/product</label>
                    <textarea name="desc_service_three" id="desc_service_three" cols="30" rows="2"
                              class="form-control" required></textarea>

                </div>

                <!--Third form-->
                <div class="col-md-3 py-5 px-5 bg-light   ">
                    <label for="desc_company" class="mb-2">Provide a description of your company,something people should
                        be aware of before they contact you:</label>
                    <textarea name="desc_company" id="desc_company" cols="30" rows="2"
                              class="form-control" required></textarea>


                    <label for="linkedin" class="mb-2">LinkedIn</label>
                    <input type="text" class="form-control" id="linkedin" name="linkedin" required>


                    <label for="facebook" class="mb-2">Facebook</label>
                    <input type="text" class="form-control" id="facebook" name="facebook" required>

                    <label for="twitter" class="mb-2">Twitter</label>
                    <input type="text" class="form-control" id="twitter" name="twitter" required>

                    <label for="google-plus" class="mb-2">Google+</label>
                    <input type="text" class="form-control" id="google-plus" name="google_plus" required>

                    <input type="submit" class="mt-5 btn btn-warning form-control text-white" required>

                </div>


            </form>


        </div>
    </div>

</div>


</body>
</html>