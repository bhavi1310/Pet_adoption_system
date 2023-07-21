<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact Us</title>
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
<section class="my-4">
  <div class ="py-5">
<div class="container">
      
      <div class="w-50 m-auto"> 
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1 class="text-center">Send us a Message</h1>
          </div>
          <div class="panel-body">
            <form action="data.php" method="post">
              <div class="form-group">
                <label for="name"> Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  name="name"
                />
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
              
              <div class="form-group">
                <label for="state">State</label>
                <input
                  type="text"
                  class="form-control"
                  id="state"
                  name="state"
                />
              </div>
              <div class="form-group">
                <label for="city">City</label>
                <input
                  type="text"
                  class="form-control"
                  id="city"
                  name="city"
                />
              </div>
              <div class="form-group">
                <label for="qdata">What would you like to contact us about?</label>
                <input
                  type="text"
                  class="form-control"
                  id="qdata"
                  name="qdata"
                />
              </div>
              <input type="submit" class="btn btn-primary" />
            </form>
          </div>
         
        </div>
      </div>
    </div>
</section>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
  
