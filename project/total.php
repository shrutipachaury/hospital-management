<html>
<body background="bg1.png">
<?php 
mysql_connect("localhost", "root", "") or die("Connection Failed");
 mysql_select_db("hospital")or die("Connection Failed");
 $billno = $_POST['billno']; 
$query = "select total from inbill where billno = '$billno'";
 $result = mysql_query($query); 
while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
 { 
echo "<p>TOTAL:";
echo $line['total'];

echo "<br>\n";

}
?>
</body>
</html>