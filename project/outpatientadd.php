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
			$tbl_name="outpatient";
			$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db_name);
            $name=$_POST["name"];
            $gender=$_POST["gender"];
             $contact_no=$_POST["contact_no"];
            $date=$_POST["date"];
              $patient_no=$_POST["patient_no"];
           $age=$_POST["age"];
            $sql = "INSERT INTO outpatient(patient_no,name,age,gender,date,contact_no)VALUES('$patient_no','$name','$age','$gender','$date','$contact_no')";
               
            
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