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
        $state = $_REQUEST['state'];
        $city = $_REQUEST['city'];
	$qdata = $_REQUEST['qdata'];
        
        
        
        $sql = "INSERT INTO contact VALUES ('$name','$email','$state','$city','$qdata')";
        
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
