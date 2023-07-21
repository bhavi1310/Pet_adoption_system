<!DOCTYPE html>
<html lang="en">
<head>
<title>HAPPY PAWS</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">HAPPY PAWS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Adoption
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="adopt.php">Adopt a Pet</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="giveforadopt.php">Give for Adoption </a>
        </div>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pet Information
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="petinfo.php">DOGS</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="catinfo.php">CATS </a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>

      
      
    </ul>
    
  </div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/dog.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/dog1.jpg" alt="Second slide">
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section class="my-5">
  <div class ="py-5">
    <h2 class="text-center">ADOPT</h2>
</div>

<div class="container-fluid"> 
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="images/dog2.jpg" class ="img-fluid"aboutimg>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <h2 class="display-4">Life is crazy, Pets make it easy </h2>
      <p class="py-4 display-5">Some of the animals don't have a home to go back to.
         Help them in finding one and get yourself a furry companion that you so dearly want.
         </p>
         <a href="" class="btn btn-success"> Know More </a>
    </div>
</div>
</div>
</section>












    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>