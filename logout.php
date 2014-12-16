<?php
session_start();
require('conn.php');
$uname=$_GET['uname'];
$query="delete from online_users where username='$uname' LIMIT 1" or die('dog');
mysqli_query($dbconn,$query);
echo $uname." Logged Out";
session_destroy();
//header('Location:index.htm');
?>
