<?php 
mysql_connect("localhost", "root", "") or die("Connection Failed");
 mysql_select_db("hospital")or die("Connection Failed");
 $patient_id = $_POST['patient_id']; 
$query = "select * from outpatient where patient_no = '$patient_id'";
 $result = mysql_query($query); 
while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
 { 
echo "<p>PATIENT ID:";
echo $line['patient_no'];
echo "<br>\n";
echo "<p>NAME:";  
echo $line['name'];
echo "<br>\n";  
echo "<p>AGE:";
echo $line['age']; 
echo "<br>\n"; 
echo "<p>GENDER:";
echo $line['gender']; 
echo "<br>\n";
echo "<p>DATE:"; 
echo $line['date'];
echo "<br>\n";
echo "<p>CONTACT NO::";  
echo $line['contact_no']; 
echo "<br>\n"; 
}
?>