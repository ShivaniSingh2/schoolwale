<?php
  session_start();
?>
<html>
<head>
<title> add product by customer </title>
<script>
function fetchproduct(str)
{
 var req=new XMLHttpRequest();
 
  req.onreadystatechange=function() {
    if(req.readyState==4&&req.status==200)
	{	
	  
	  document.getElementById("product").innerHTML=req.responseText;
	  
	}
  
  };
   req.open("GET","http://localhost/project/pro.php?category="+str,true);
  req.send();
}
</script>
</head>
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
<form action="#"  method="post">
<select name="category" onchange="fetchproduct(this.value)">
    <option>book</option>
	<option>shoes</option>
	<option>stationary</option>
	<option>dress</option>
	<option>bag</option>
</select>
<br></br>

</form>
</br></br>
<form action = "pro2.php" method="post">
<select name="pname" id="product">
    <option >select category</option>
</select>
<label for="stock">Stock</label>
<input  type="number" name="stock"/>
<br> </br> 
<label for="vprice"> Price </label>
<input  type="float" name="vprice"/> <br> </br>

<input type="submit" />
</form>

</body>
</html>