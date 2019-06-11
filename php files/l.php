<?php
  $id= $_POST['pid'];
  $name= $_POST['pname'];
  $c= $_POST['cat'];
  $s= $_POST['stock'];
  
  if("raji"=="raj")
	  echo "raj";
  else
	  echo "ritika";
 
  $con=mysqli_connect('localhost','root');
  if(!$con)
	  echo "con failes";
  else
	  echo "con donee";
  mysqli_select_db($con,'schoolwaale');
  
  $q="insert into product_details (pid,pname,category,prize,stock) values ($id,'$name','$c',100,$s)";
  mysqli_query($con,$q);
  
  mysqli_close($con);
?>  