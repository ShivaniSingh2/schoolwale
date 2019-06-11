<?php
  session_start();
  $cat=$_GET['category'];
  $pname=$_GET['pname'];
  $stock=$_GET['stock'];
  $vprice=$_GET['vprice'];
  $vid=$_SESSION['vid'];
  
 
  echo $cat;
  $i=0;
   $con=mysqli_connect('localhost','root');
  if(!$con)
	  echo "con failes";
  
  mysqli_select_db($con,'schoolwaale');
	   

	
	 $q = "select * from product where category='$cat'";
     $data=mysqli_query($con, $q);
	 
	 while($res=mysqli_fetch_assoc($data)){
	 $x[$i]=$res["pname"];
	 $i++;
     }
	
	 
	 foreach($x as $p)
	  {
		
		   echo "<option>$p</option>";
      
	  }
	  
	  $q = "select * from product where pname='$pname'";
     $data=mysqli_query($con, $q);
	 $res=mysqli_fetch_assoc($data);
	 $pid=$res["pid"];
	   
	 $q="insert into stock (stock,vprice,pid,vid) values ($stock,$vprice,$pid,$vid)";
	  mysqli_query($con,$q);
	  
	  mysqli_close($con);
?>  

