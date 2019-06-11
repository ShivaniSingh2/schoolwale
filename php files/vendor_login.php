<?php
  session_start();
  $vname=$_POST['uname'];
  $passwd=$_POST['passwd'];
  
  $con=mysqli_connect('localhost','root');
  if(!$con)
	  echo "con failes";
  
  mysqli_select_db($con,'schoolwaale');
	   

	
	 $q = "select * from vendor where vname='$vname' && password='$passwd'";
     $data=mysqli_query($con, $q);
	 $n=mysqli_num_rows($data);
	 if($n==1)
	 {
		 $_SESSION['vname']=$vname;
		 
	     header('location:http://localhost/project/test3.php');
	 }
	 else
	 {
		 echo"failed";
	     header('location:http://localhost/project/vendor_login.html');
	 }
	   mysqli_close($con);
?>  