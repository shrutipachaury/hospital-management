<html>
   
   <head>
      <title>Add New room Record in MySQL Database</title>
   </head>
   
   <body>
      <?php
            $dbhost="localhost";
            $dbuser="root";
            $dbpass="";
            $db_name="hospital";
			$tbl_name="room";
			$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db_name);
            $room_no=$_POST["room_no"];
            $room_type=$_POST["room_type"];
			
            $sql = "INSERT INTO room(room_no,room_type) values('$room_no','$room_type')";
               
            
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