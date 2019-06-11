<?php
  $uname= $_POST['uname'];
  $email= $_POST['email'];
  $fname= $_POST['fname'];
  $lname= $_POST['lname'];
  $phone= $_POST['phone'];
  $passwd= $_POST['password'];
 
   $con=mysqli_connect('localhost','root');
  if(!$con)
	  echo "con failes";
  else
	  echo "con donee";
  mysqli_select_db($con,'schoolwaale');
  
  $q="insert into customer (cname,email,fname,lname,phone,password) values ('$uname','$email','$fname','$lname','$phone','$passwd')";
  mysqli_query($con,$q);
  
  mysqli_close($con);
?>  