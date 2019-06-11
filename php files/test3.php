<?php
  session_start();
?>
<html>
<head>
<title> add product by customer </title>
<body>
<h3><?php echo $_SESSION['vname']; 
     $con=mysqli_connect('localhost','root');
     if(!$con)
	  echo "con failes";
  
     mysqli_select_db($con,'schoolwaale');
	  $vname= $_SESSION['vname'];
     $q = "select * from vendor where vname='$vname'";
     $data=mysqli_query($con, $q);
	 $res=mysqli_fetch_assoc($data);
	 echo "  vid : ". $res["vid"];
	 //$temp=&res["vid"];
     
	 $_SESSION['vid']=$res["vid"];

 ?> </h3>
<form action = "pro2.php" method="get">
<label for="pname">Pname</label>
<input  type="text" name="pname"/>
<br> </br>
<label for="">stock</label>
<input  type="number" name="stock"/>
</br></br>

<label for="vprice"> Price </label>
<input  type="float" name="vprice"/> <br> </br>

<input type="submit" />
</form>

</body>
</html>