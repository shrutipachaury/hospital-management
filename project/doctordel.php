<html>
   
   <head>
      <title>Delete a Record from MySQL Database</title>
   </head>
   
   <body>
      <?php
            $db_name="hospital";
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
	    $tbl="doctor";
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db_name);
            
            
				
            
            $id=$_POST["id"];
            
            $sql = "DELETE FROM doctor WHERE id = '$id'" ;
            
            $retval = mysqli_query($conn,$sql);
            
            if($retval!=true) {
               die('Could not delete data: ' . mysql_error());
            }
            else
			{
            echo "Deleted data successfully\n";
            }
          
         
      ?>
      
   </body>
</html>