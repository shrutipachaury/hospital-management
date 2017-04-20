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
			$tbl_name="doctor";
			$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db_name);
 $name=$_POST["name"];
 $gender=$_POST["gender"];
$address=$_POST["address"];
$phone_no=$_POST["phone_no"];
$qualification=$_POST["qualification"];
$id=$_POST["id"];
$department=$_POST["department"];
$age=$_POST["age"];
$sql = "INSERT INTO doctor(id,name,address,phone_no,qualification,gender,age,department)VALUES('$id','$name','$address','$phone_no','$qualification','$gender','$age','$department')";
               
            
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