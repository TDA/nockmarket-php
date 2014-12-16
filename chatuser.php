<?php
require('conn.php');

if(@$_GET['user'])
{	
	$user=$_GET['user'];
	mysqli_query($dbconn,"insert into online_users values('$user')");	
	$res=mysqli_query($dbconn,"select * from online_users");
	$row=mysqli_fetch_array($res);
	$online_list=$row['username'];
	while($row=mysqli_fetch_array($res))
	{
	$online_list=$online_list.','.$row['username'];	
	}
	echo $online_list;
	
}

else if(@$_POST['uname']&&@$_POST['chat_msg'])
{
	$user=$_POST['uname'];
	$chat_msg=$_POST['chat_msg'];
	
	mysqli_query($dbconn,"insert into chat_table values('','$user','$chat_msg',NOW())");
}

else if(@$_POST['request']=='msgs'){
	$msg_list='';
	$res=mysqli_query($dbconn,"select * from chat_table");
	while($row=mysqli_fetch_array($res))
	{
		$msg_list=$msg_list.$row['username']." : ".$row['chat_msg'].',';
	}

	echo $msg_list;

	}
else if(@$_POST['request']=='lastmsg'){
	$res=mysqli_query($dbconn,"select * from chat_table order by chat_id DESC");
	$row=mysqli_fetch_array($res);
	$msg_list=$row['username']." : ".$row['chat_msg'];
	echo $msg_list;
}

?>