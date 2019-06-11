<?php
  $cat="book";
  $i=0;
   $con=mysqli_connect('localhost','root');
  if(!$con)
	  echo "con failes";
  
  mysqli_select_db($con,'schoolwaale');
	   

	
	 $q = "select * from product where category='$cat'";
     $data=mysqli_query($con, $q);
	 
	 while($res=mysqli_fetch_assoc($data)){
	 echo $res['pname'] . "<br>";
     }
  
 ?>