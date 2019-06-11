<?php
  session_start();
  $cname=$_POST['cname'];
  $password=$_POST['password'];
  
  $con=mysqli_connect('localhost','root');
  if(!$con)
	  echo "con failes";
  
  mysqli_select_db($con,'schoolwaale');
	   

	
	 $q = "select * from customer where cname='$cname' && password='$password'";
     $data=mysqli_query($con, $q);
	 $n=mysqli_num_rows($data);
	 if($n==1)
	 {
		 $_SESSION['cname']=$cname;
		 
	     header('location:http://localhost/project/orderpro.html');
	 }
	 else
	 {
		 echo"failed";
	     header('location:http://localhost/project/customer_login.html');
	 }
	   mysqli_close($con);
?>  