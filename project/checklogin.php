<?php
	
session_start();

?>



<!DOCTYPE html>

<html>

<body>


<?php

$host="localhost"; 		// Host name 
	
$username="root"; 		// Mysql username 
	
$password=""; 			// Mysql password 
	
$db_name="hospital"; 		// Database name 
	
$tbl_name="login"; 	// Table name 

	// Connect to server and select databse.
	
$connection = mysqli_connect($host,$username,$password,$db_name);
	
if (mysqli_connect_errno()) 
{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}


	// username and password sent from form 
	
$myusername=$_POST["myusername"]; 
	
$mypassword=$_POST["mypassword"]; 

	// To protect MySQL injection 
	
$myusername = stripslashes($myusername);
	
$mypassword = stripslashes($mypassword);
	
$myusername = mysqli_real_escape_string($connection, $myusername);
	
$mypassword = mysqli_real_escape_string($connection, $mypassword);
	
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";

	
$result=mysqli_query($connection, $sql);

	// Mysql_num_row is counting table row
	
$count=mysqli_num_rows($result);

	// If result matched $myusername and $mypassword, table row must be 1 row
	
if($count==1){
		// Register $myusername, $mypassword and redirect to file "login_success.php"
		
$_SESSION["username"]= $myusername; 
		
$_SESSION["password"]= $mypassword; 
		
header("location:links.html");
	}
	
else {
		$message = "Username and/or Password incorrect.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
		
	}
	
?>

</body>

</html>

