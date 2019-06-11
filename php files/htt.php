<?php

    $pname="pinksuit";

    $con=mysqli_connect('localhost','root');
  if(!$con)
	  echo "con failes";
  
  mysqli_select_db($con,'schoolwaale');

	  $q = "select * from product where pname='$pname'";
     $data=mysqli_query($con, $q);
	 $res=mysqli_fetch_assoc($data);
	 $pid=$res["pid"];
	 echo $pid;
	 
mysqli_close($con);
?>  