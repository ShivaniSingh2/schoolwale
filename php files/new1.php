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
	  
	  document.getElementById("att1").innerHTML=req.responseText;
	  document.getElementById("att2").innerHTML=req.responseText;
	}
  
  };
   req.open("GET","http://localhost/project/new2.php?category="+str,true);
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
<label for="att1" id="att1">att1</label>
<input  type="number" name="att1"/>
<label for="att2" id="att2">att2</label>
<input  type="text" name="att2"/>

</select>
</form>

</body>
</html>