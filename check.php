<?php
require_once('checkuser.php');

if(mysqli_num_rows($res)>0)
return 1;
else return 0;


?>