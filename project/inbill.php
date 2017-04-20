<html>
   
   <head>
      <title>Add New Record in MySQL Database</title>
   </head>
   
   <body>
      <?php
            $dbhost="localhost";
            $dbuser="root";
            $dbpass="";
            $db_name="hospital";
			$tbl_name="inbill";
			$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db_name);
            $billno=$_POST["billno"];
            $date=$_POST["date"];
			$patientid=$_POST["patientid"];
			$name=$_POST["name"];
			$age=$_POST["age"];
			$gender=$_POST["gender"];
            $doa=$_POST["doa"];
			$dod=$_POST["dod"];
			$roomcharges=$_POST["roomcharges"];
		
			$doctorfees=$_POST["doctorfees"];
			$misc=$_POST["misc"];
			$total=$roomcharges+$doctorfees+$misc;
            $sql = "INSERT INTO inbill VALUES('$billno','$date','$patientid','$name','$age','$gender','$doa','$dod','$roomcharges','$doctorfees','$misc','$total')";
               
            
            $retval=mysqli_query($conn,$sql);
            
            if($retval!=true)
            {
               die('Could not enter data: ' . mysql_error());
            }
            else
			{
            echo "Entered data successfully\n";
            }
            
         
         ?>
<a href="total.php">click here</a>
</body>
<html>
