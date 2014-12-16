<?php
require('conn.php');
$username=$_GET['uname'];
$email=$_GET['email'];

$query="update users set email='$email' where username='$username'";
$res=mysqli_query($dbconn,$query) or die('error in query');

echo $email;
echo $username;
?>
