<?php 
mysql_connect("localhost", "root", "") or die("Connection Failed");
 mysql_select_db("hospital")or die("Connection Failed");
 $id = $_POST['id']; 
$query = "select * from doctor where id = '$id'";
 $result = mysql_query($query); 
while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
 { 
echo $line['id'];
echo "<br>\n";  
echo $line['name'];
echo "<br>\n";  
echo $line['age']; 
echo "<br>\n"; 
echo $line['gender']; 
echo "<br>\n"; 
echo $line['address'];
echo "<br>\n";  
echo $line['phone_no']; 
echo "<br>\n"; 
echo $line['qualification']; 
echo "<br>\n"; 
echo $line['department']; 
echo "<br>\n"; 
}
?>