<?php
  session_start();
  
  $pname=$_POST['pname'];
  $stock=$_POST['stock'];
  $vprice=$_POST['vprice'];
  $vid=$_SESSION['vid'];
  
   $con=mysqli_connect('localhost','root');
  if(!$con)
	  echo "con failes";
  
  mysqli_select_db($con,'schoolwaale');
	   
       $q = "select * from product where pname='$pname'";
     $data=mysqli_query($con, $q);
	 $res=mysqli_fetch_assoc($data);
	 $pid=$res["pid"];
	 
	  echo $pid . "   ".$vid . "   ". $stock . "  " . $vprice;
	 $q="insert into stock (stock,vprice,pid,vid) values ($stock,$vprice,$pid,$vid)";
	  mysqli_query($con,$q);
	  
	  mysqli_close($con);
?>  

