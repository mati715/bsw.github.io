<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">

  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab&display=swap" rel="stylesheet">
</head>
<body>

<?php include 'menu.php';  ?>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/OIP.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/OIP1.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/OIP2.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
    <div>
        <h2 class="text-center">About US</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="img/Dark Road.jpg" class="img-fluid abtimg">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <h2 class="display-4">This is my first paragraphe</h2>
                <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium nihil voluptas exercitationem!</p>
            </div>
        </div>
    </div>
</section>

<section class="my-3">
    <div class="py-3">
        <h2 class="text-center">Services</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="img/OIP1.jpg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Nature</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem optio ut incidunt laboriosam nulla, ea, officiis est ipsam, delectus saepe porro magnam!</p>
                        <a href="#" class="btn btn-primary stretched-link">See Profile</a>
                    </div>
                </div> 
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="img/Dark Road.jpg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Nature</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem optio ut incidunt laboriosam nulla, ea, officiis est ipsam, delectus saepe porro magnam!</p>
                        <a href="#" class="btn btn-primary stretched-link">See Profile</a>
                    </div>
                </div> 
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="img/OIP (3).jpg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Nature</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem optio ut incidunt laboriosam nulla, ea, officiis est ipsam, delectus saepe porro magnam!</p>
                        <a href="#" class="btn btn-primary stretched-link">See Profile</a>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div>
        <h2 class="text-center">Our Galary</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <img src="img/Dark Road.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <img src="img/Dark Road.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <img src="img/Dark Road.jpg" class="img-fluid pb-4">
            </div>

            <div class="col-lg-4 col-md-4 col-12">
            <img src="img/Dark Road.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <img src="img/Dark Road.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <img src="img/Dark Road.jpg" class="img-fluid pb-4">
            </div>

            <div class="col-lg-4 col-md-4 col-12">
            <img src="img/Dark Road.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <img src="img/Dark Road.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <img src="img/Dark Road.jpg" class="img-fluid pb-4">
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Contact Us</h2>
    </div>

    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" autocomplete="off" class="form-control">
        </div>

        <div class="form-group">
            <label>Email id</label>
            <input type="mail" name="email" autocomplete="off" class="form-control">
        </div>

        <div class="form-group">
            <label>Mobile No</label>
            <input type="text" name="mobile" autocomplete="off" class="form-control">
        </div>

        <div class="form-group">
            <label>Comments</label>
            <textarea class="form-control" name="comment"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>

<footer class="bg-dark text-white">
  <p>Posted by:MatikanProduction</p>
  <p>Contact information: <a href="mailto:someone@example.com">
     matikanproduction@example.com</a>.</p>
</footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
