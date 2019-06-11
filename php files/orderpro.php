<?php
  $name = $_POST['name'];
  $add = $_POST['add'];
  $pin = $_POST['pin'];
  $price = $_POST['price'];
  $mode = $_POST['mode'];
  
  $con = mysqli_connect('localhost','root');
    if(!$con)
	  echo "con failes";
  
     mysqli_select_db($con,'schoolwaale');
  
  
   $q = "insert into orders(name,address,price,pmode,pin) values('$name','$add',$price,'$mode','$pin')";
   mysqli_query($con,$q);
  
 // $query = "select * from orders when name=$name";
 // $data 

 ?>