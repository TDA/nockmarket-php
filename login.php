<?php
session_start();

require('conn.php');
$username=$_POST['username'];
$pass=SHA1($_POST['password']);

$query="select * from users where username='$username'";
$res=mysqli_query($dbconn,$query) or die('error in query');
$row=mysqli_fetch_array($res);

if($row['password']==$pass){
	$_SESSION['uname']=$username;
	$_SESSION['email']=$row['email'];
	
	header('Location:portfolio.php');
}
else{
echo 'Incorrect username or password. Pls try again.';
session_destroy();

}
?>