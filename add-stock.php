<?php
require('conn.php');
$username=$_POST['user'];
$stock_name=$_POST['stock'];

$url = "http://quote.yahoo.com/d/quotes.csv?s=". $stock_name . "&f=nl1c1&e=.csv";
 
 
$filesize = 2000;
$handle = fopen($url, "r");
$raw_quote_data = fread($handle, $filesize);
fclose($handle);

$proc_data=$stock_name.','.$raw_quote_data;

$query="select * from userstocks where username='$username'";
$res=mysqli_query($dbconn,$query) or die('error in query');
$row=mysqli_fetch_array($res);
$raw_price=$row['stocks'];

if($raw_price!=''){
$proc_data=$raw_price.','.$proc_data;
$query="update userstocks set stocks='$proc_data' where username='$username'";
}
else
$query="insert into userstocks values ('$username','$proc_data')";


$res=mysqli_query($dbconn,$query) or die('error in query');

echo $raw_quote_data;

?>