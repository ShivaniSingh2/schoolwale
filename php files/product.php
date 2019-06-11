<?php
  $cat=$_GET['category'];

 
   $con=mysqli_connect('localhost','root');
  if(!$con)
	  echo "con failes";
  else
	  echo "con donee";
  mysqli_select_db($con,'schoolwaale');
  

   if($cat=="book")
   {
	   
     $sql="select pid from book";
     $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
 	   $x[$i]=$row["pid"];
	   $i++;
   }
   }
  
  if($cat=="stationary")
   {
	   
     $sql="select pid from stationary";
    $result = mysqli_query($con, $sql);

   if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
 	    $x[$i]=$row["pid"];
	   $i++;
	 }
   }
   }
   
   if($cat=="shoes")
   {
     $sql="select pid from shoes";
     $result = mysqli_query($con, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
 	    $x[$i]=$row["pid"];
	   $i++;
	 }
   }
   }
   
   if($cat=="dress")
   {
     
  $sql = "select pid from dress";
  $result = mysqli_query($con, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
 	   $x[$i]=$row["pid"];
	   $i++;
	 }
   }
   
   if($cat=="bag")
   {
     $sql="select pid from bag";
    $result = mysqli_query($con, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
 	    $x[$i]=$row["pid"];
	   $i++;
	 }
   }
   }
  
  mysqli_close($con);
  
 ?>