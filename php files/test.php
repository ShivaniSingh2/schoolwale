<?php
   $i=0;
   $a="book";
   $con=mysqli_connect('localhost','root');
  if(!$con)
	  echo "con failes";
  else
	  echo "con donee";
  mysqli_select_db($con,'schoolwaale');
  
  $sql = "select pid from $a";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       $x[$i]=$row["pid"];
	   $i++;
    }
} 

foreach($x as $n)
{
	  $sql = "select pname from product where pid = $a";
          $result = mysqli_query($con, $sql);
		   if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
 	     $x[$i]=$row["pname"];
	     $i++;
	 }
	echo $x[$i];
}
}
?>