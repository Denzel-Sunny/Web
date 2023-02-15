<?php
$mysql_host='localhost';
$mysql_user='22mca022';
$mysql_password='2017';
$conn=mysqli_connect($mysql_host,$mysql_user,$mysql_password);
if(mysqli_select_db($conn,'22mca022'))
{echo 'connection successful';
}
else{
echo 'connection failed';
}
?>
