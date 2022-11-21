<?php

    if (isset($_POST['name'])) {
	    $server = "localhost";
	    $user = "root";
	    $pass = "";
	    $database = "trip";

	    $con = mysqli_connect($server, $user, $pass, $database);

	    $name = $_POST['name'];
	    $age = $_POST['age'];
	    $dept = $_POST['dept'];
	    $contact = $_POST['contact'];

	    $sql = "INSERT INTO `travel` (`name`, `age`, `dept`, `contact`, `date`) VALUES ('$name', '$age', '$dept', '$contact', current_timestamp())";
	    $result = mysqli_query($con, $sql);

	    if ($result){
		echo "successfully inserted";
	    }
	    else{
		echo "error :" .mysqli_error($con);
	    }
	    
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MCKVIE Form </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3>Welcome To MCKVIE Student Form</h3>
        <p>Hello MCKVIANS enter your details and submit this form</p>
        <form action="index1.php" method="post">
            <input type="name" name="name" id="name" placeholder="Enter your name">
            <input type="age" name="age" id="age" placeholder="Enter your age">
            <input type="dept" name="dept" id="dept" placeholder="Enter your department">
            <input type="contact" name="contact" id="contact" placeholder="Enter your contact number">
            <button class="btn">Submit</button>
        
            
        </form>
    </div>
    
</body> 
</html>
