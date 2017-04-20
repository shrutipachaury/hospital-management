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
	    $tbl="inpatient";
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db_name);
            
            
				
            
            $patient_no=$_POST["patient_no"];
            
            $sql = "DELETE FROM inpatient WHERE patient_no = '$patient_no'" ;
            
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