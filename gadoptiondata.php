<!DOCTYPE html>
<html>

<head>
    <title>Insert Page </title>
</head>

<body>
    <center>
        <?php

      
        $conn = mysqli_connect("localhost", "root", "", "customer");
        
       
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        
        
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $number = $_REQUEST['number'];
        $state = $_REQUEST['state'];
	$city = $_REQUEST['city'];
	$species = $_REQUEST['species'];
        $breed = $_REQUEST['breed'];
        $gender = $_REQUEST['gender'];
        
        
        
        $sql = "INSERT INTO contactt VALUES ('$name','$email','$number','$state','$city','$species','$breed','$gender')";
        
        if(mysqli_query($conn, $sql)){
            echo "<h3> Your form has been submitted.</h3>";
	
	
            
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
        
        
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>
