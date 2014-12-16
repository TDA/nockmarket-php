<?php


require('conn.php');
	$username=$_POST['user'];
	$query="select * from userstocks where username='$username'";
	$res=mysqli_query($dbconn,$query) or die('error in query');
	
	
	$order=(rand(1,6) > 3)?'b':'a';
    
	$length=mysqli_num_rows($res);

 	$row=ceil(rand(1,10)*$length/rand(1,8));
    $column=floor(rand(1,5)*5/rand(1,5));
	$price=0;
    $priceRange=10;
    $shift = floor(rand(1,1000) * $priceRange /(2*rand(1,1000)));
    
	if (rand(1,6) > 2)
      $price += $shift;
    else
      $price += rand(1,5)-$shift;
		$price=($price>0)?$price:-$price;
      
	  $volRange=10;
	  $volFloor=5;
      $volume = floor(rand(1,100) * $volRange/rand(1,100)) + $volFloor;
      
	$query="insert into exch values($price,$volume)";
	$res=mysqli_query($dbconn,$query) or die('error in query');
	
	$pos='n'.$row.$order.$column;
	  
	echo $price.','.$volume.','.$pos;
  


?>