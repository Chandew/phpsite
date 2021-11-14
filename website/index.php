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
  include 'menu.php'
  ?>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images\3 (1).jpg" alt="Umngot River" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="Images\3.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="Images\3 (2).jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
  <div class="py-3">
    <h3 class="text-center">About us</h3>
  </div>
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
      <img src="Images\3 (2).jpg" class="img-fluid aboutimg">

    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
      <h3 class="display-4">I'm Chandew the Great</h3>
      <p class="py-3">Diamond is a solid form of the element carbon with its atoms arranged in a crystal structure called diamond cubic. At room temperature and pressure, another solid form of carbon known as graphite is the chemically stable form of carbon, but diamond almost never converts to it.</p>
      <a href="about.php" class="btn btn-success">Check more</a>
    </div>
  </div>
  </div>
</section>
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
<section class="my-3 mx-3">
  <div class="py-3">
    <h3 class="text-center">Our Gallery</h3>
  </div>
  <div class="conatiner-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <img src="Images\Second-boat.jpg" alt="" class="img-fluid pb-5">
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <img src="Images\Shooting.jpg" alt="" class="img-fluid pb-5">
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <img src="Images\beer.jpg" alt="" class="img-fluid pb-5">
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <img src="Images\martini.jpg" alt="" class="img-fluid pb-5">
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <img src="Images\mojito.jpg" alt="" class="img-fluid pb-5">
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <img src="Images\muay thai.jpg" alt="" class="img-fluid pb-5">
      </div>
    </div>
  </div>
</section>
<section class="my-3 mx-3">
  <div class="py-3">
    <h3 class="text-center">Our Gallery</h3>
  </div>
  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      <div class="form-group">
      <label >Username:</label>
      <input type="text" name="user" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
      <label >Email Id:</label>
      <input type="text" name="email" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
      <label >Mobile No:</label>
      <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
      <label >Comments:</label>
      <textarea class="form-control" name="comment"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

</section>
<footer class="p-3 text-white bg-dark text-center">
      <h5>@ChandewTechnicalProductions</h5>
</footer>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>