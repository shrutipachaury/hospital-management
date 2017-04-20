

<?php
session_start();
?>


<!DOCTYPE html>
<html>
<body>
	</br> </br>
	<?php
	// remove all session variables
	session_unset(); 

	// destroy the session 
	session_destroy(); 
	?>
	
	</br> </br>
	Thanks for Listenting to me !!

	</br> </br>
	<a href="main_login.php">Click here to go back to login page</a>
	
</body>
</html>