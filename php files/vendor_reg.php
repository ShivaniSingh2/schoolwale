<?php
  $uname= $_POST['uname'];
  $email= $_POST['email'];
  $fname= $_POST['fname'];
  $lname= $_POST['lname'];
  $store= $_POST['store'];
  $address= $_POST['address'];
  $state= $_POST['state'];
  $city= $_POST['city'];
  $zip= $_POST['zip'];
  $phone= $_POST['phone'];
  $accno= $_POST['accno'];
  $ifsc= $_POST['ifsc'];
  $accname= $_POST['accname'];
  $bank= $_POST['bank'];
  $branch= $_POST['branch'];
  $passwd= $_POST['passwd'];
 
   

	   
 
  $con=mysqli_connect('localhost','root');
  if(!$con)
	  echo "con failes";
  else
	  echo "con donee";
  mysqli_select_db($con,'schoolwaale');
  
  $q="insert into vendor (vname,email,fname,lname,store,address,state,city,zip,phone,accno,ifsc,accholdnm,bank,branch,password) values ('$uname','$email','$fname','$lname','$store','$address','$state','$city',$zip,'$phone','$accno','$ifsc','$accname','$bank','$branch','$passwd')";
  mysqli_query($con,$q);
  
  mysqli_close($con);
?>  