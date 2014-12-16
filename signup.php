<?php
require('conn.php');
$username=$_POST['username'];
$email=$_POST['email'];
$pass=SHA1($_POST['password']);

$query="insert into users values('','$username','$email','$pass')";
$res=mysqli_query($dbconn,$query) or die('error in query');
header('Location:index.htm');
?>
