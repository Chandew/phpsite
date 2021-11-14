<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Romanesco&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>1st PHP website</title>
  </head>
  <body>
  <?php
      include'menu.php'
  ?>
<div class="jumbotron">
  <h1 class="display-4">We Welcome you to our services.</h1>
</div>
<section class="my-5">
  <div class="py-3">
    <h3 class="text-center">Our Services</h3>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="card" style="width:400px">
        <img class="card-img-top" src="Images\3 (3).jpg" alt="Card image">
        <div class="card-body">
            <h4 class="card-title">Boating</h4>
             <p class="card-text">&#8377;500/hr.</p>
            <a href="#" class="btn btn-primary">Book Now</a>
            </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="card" style="width:400px">
        <img class="card-img-top" src="Images\swim.jpg" alt="Card image">
        <div class="card-body">
            <h4 class="card-title">Swimming</h4>
             <p class="card-text">&#8377;500/hr.</p>
            <a href="#" class="btn btn-primary">Book Now</a>
            </div>
        </div>
      </div><div class="col-lg-4 col-md-6 col-sm-12">
      <div class="card" style="width:400px">
        <img class="card-img-top" src="Images\motor.jpg" alt="Card image">
        <div class="card-body">
            <h4 class="card-title">Motor Boat</h4>
             <p class="card-text">&#8377;1000/hr.</p>
            <a href="#" class="btn btn-primary">Book Now</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class="p-3 text-white bg-dark text-center">
      <h5>@ChandewTechnicalProductions</h5>
</footer>
</body>
</html>
