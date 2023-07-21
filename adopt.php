<!DOCTYPE html>
<html lang="en">
<head>
<title>Adopt-Happy Paws</title>
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
<?php


$user = 'root';
$password = '';


$database = 'petshop_management';


$servername='localhost:3306';
$mysqli = new mysqli($servername, $user, $password, $database);


if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}


$sql = " SELECT * FROM pets ";
$result = $mysqli->query($sql);
$mysqli->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>fetching</title>
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
        
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
        
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
    </style>
</head>

<body>
    <section>
        <h1>These are all the pets available here.</h1>
        <table>
            <tr>
                <th>Pet id</th>
                <th>Category</th>
                <th>Cost</th>
            </tr>
            
            <?php
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                
                <td><?php echo $rows['pet_id'];?></td>
                <td><?php echo $rows['pet_category'];?></td>
                <td><?php echo $rows['cost'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
	<h1>Sharing images is confidential.</h1>
	<h1>If you are interested in buying then please contact us.</h1>
          </div>
           <a href="contact.php" class="btn btn-primary">CONTACT US</a>   
          </div>
    </section>
</body>

</html>











<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>