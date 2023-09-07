<!DOCTYPE html>
<html lang="en">
<head>
   <title></title>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet"type="text/css"href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
 
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Glimpse</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/andaman.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Andaman Islands</h3>
        <p>We had such a great time in Andaman!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/megh.jpeg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Meghalaya</h3>
        <p>Thank you, Meghalaya!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/him.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Himachal Pradesh</h3>
        <p>We love Apples!</p>
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
    <div class="py-5">
    <div>
        <h2 class="text-center">About Us</h2>
        <br></br>
</div>
<div class="container-fluid">
<div class="row">
    <div class="col-lg-6 col-md-6 col-12">
       <img src="images/cc.png " class="img-fluid">
</div>
<div class="col-lg-6 col-md-6 col-12">
       <h2 class="display-5">This is Glimpse</h2>
     
       <p>Welcome to Glimpse,a destination that offers a blend of history, natural beauty, and vibrant culture. From stunning landscapes to rich traditions, we invite you to embark on a journey of discovery and adventure. Whether you seek relaxation or exploration. We promise unforgettable experiences and warm hospitality. Join us and create cherished memories in a place where the past meets the present, and every moment is a new adventure. Your unforgettable journey begins here!</p>
<a href="about.php" class="btn btn-success"> check more</a>
    </div>
</div>
</div>


</section>

<section class="my-5">
    <div class="py-5">
    <div>
        <h2 class="text-center">Destinations</h2>
        <br></br>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
  <img class="card-img-top" src="images/a3.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Goa</h4>
    <p class="card-text">India's coastal paradise, where sun, sand, and culture blend in harmony.</p>
    <a href="#" class="btn btn-primary">Explore</a>
  </div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
  <img class="card-img-top" src="images/a1.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Pune</h4>
    <p class="card-text">Oxford of the East, blend of history and modernity seamlessly."</p>
    <a href="#" class="btn btn-primary">Explore</a>
  </div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
  <img class="card-img-top" src="images/a2.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Assam</h4>
    <p class="card-text">Explore lush tea gardens and diverse wildlife, rich in culture and greenery.</p>
    <a href="#" class="btn btn-primary">Explore</a>
  </div>
</div>
</div>
</div>
</div>
</section>

</div>
</div>

</section>

<section class="my-5">
    <div class="py-5">
    <div>
        <h2 class="text-center">Reach Us</h2>
        </div>

        <div class="w-50 m-auto">
<form action="userinfo.php" method="post">
    <div class="form-group">
        <label>Username</label>
        <input type ="text" name="user" autocomplete="off" class="form-control">
</div>
<div class="form-group">
        <label>Email Id</label>
        <input type ="text" name="email" autocomplete="off" class="form-control">
</div>
<div class="form-group">
        <label>Mobile</label>
        <input type ="text" name="mobile" autocomplete="off" class="form-control">
</div>
<div class="form-group">
        <label>Comment</label>
        <textarea class="form-control" name="comment"></textarea>
</div>
<button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
</section>


<footer>
    <p class="p-3 bg-dark text white text-center">@Glimpse Pvt Ltd</p> </footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>