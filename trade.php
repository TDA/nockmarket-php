<?php
$query2="select * from exch where price=$price";
	$res=mysqli_query($dbconn,$query2) or die('error in query');
	if(mysqli_num_rows($res)>1)
	{
	$order='t';
	$column='';
	}
	

?>