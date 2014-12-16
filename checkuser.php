<?php
require('conn.php');
$username=$_GET['username'];

$query="select * from users where username='$username'";
$res=mysqli_query($dbconn,$query) or die('error in query');

if(mysqli_num_rows($res)>=1)
echo 1;
else 
echo 0;


?>

