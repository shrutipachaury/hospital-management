

<?php
	// Check if session is not registered, redirect back to main page. 
	session_start();
	if(!isset($_SESSION['username'])) {
		header("location:main_login.php");
	}
?>

<html>
<body bgcolor=yellow>
	</br> </br>
        
	<?php
		//print_r($_SESSION);
	?>

	</br> </br>
	Login Successful
	</br> </br>
	Welcome <?php echo $_SESSION['username']; ?>
	</br> </br>
        <p><font face="comic sans ms"> BookMyShow is India's biggest online movie and events ticketing brand. The website caters to ticket sales for movies, plays, concerts and sporting events via the online platform. Launched in 1999, it is headquartered in Mumbai, Maharashtra.
	</font></p>
<a href="movies.php">Click here to view latest movies</a> 
<br><br>
<center><img src="d.jpg" /></center>
</body>
</html>