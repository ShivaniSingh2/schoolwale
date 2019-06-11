<?php
  $cat=$_GET['category'];
  echo $cat;
  
   $con=mysqli_connect('localhost','root');
  if(!$con)
	  echo "con failes";
  else
	  echo "con donee";
  mysqli_select_db($con,'schoolwaale');
	   
	    $sql = "select pid from $cat";
  $result = mysqli_query($con, $sql);
  

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
 	   $x[$i]=$row["pid"];
	   $i++;
	 }
    }

      foreach($x as $p)
	  {
		
		   echo "<option>$p</option>";
      
	  }
   
  
 ?>