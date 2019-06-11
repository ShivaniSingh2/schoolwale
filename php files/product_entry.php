<?php
  $pid= $_POST['pid'];
  $pname= $_POST['pname'];
  $price= $_POST['price'];
  $category= $_POST['category'];
  
  $aclass= $_POST['aclass'];
  $asub= $_POST['asub'];
  $apub= $_POST['apub'];
  
  $bcomp= $_POST['bcomp'];
  $bsize= $_POST['bsize'];
  $bcolour= $_POST['bcolour'];
  
  $ccomp= $_POST['ccomp'];
  $ccolour= $_POST['ccolour'];
  
  $dschool= $_POST['dschool'];
  $dsize= $_POST['dsize'];
  
  $ecomp= $_POST['ecomp'];
  $esize= $_POST['esize'];
  $ecolour= $_POST['ecolour'];
     
 
  $con=mysqli_connect('localhost','root');
  if(!$con)
	  echo "con failes";
  else
	  echo "con donee";
  mysqli_select_db($con,'schoolwaale');
  
  $q="insert into product (pid,pname,price,category) values ($pid,'$pname','$price','$category')";
  mysqli_query($con,$q);
  
  if($category=="book")
  {
	  
     $qa="insert into book (class,subject,publication,pid) values ('$aclass','$asub','$apub',$pid)";
     mysqli_query($con,$qa);
  }
  elseif($category=="shoes")
  {
     $qb="insert into shoes (company,size,color,pid) values ('$bcolour','$bsize','$bcolour',$pid)";
     mysqli_query($con,$qb);
  }
  elseif($category=="stationary")
  {
     $qc="insert into stationary (company,color,pid) values ('$ccomp','$ccolour',$pid)";
     mysqli_query($con,$qc);
  }
  elseif($category=="dress")
  {
	  
     $qd="insert into dress (school,size,pid) values ('$dschool','$dsize',$pid)";
     mysqli_query($con,$qd);
  }
  elseif($category=="bag")
  {
     $qb="insert into bag (company,colour,size,pid) values ('$ecomp','$ecolour','$esize',$pid)";
     mysqli_query($con,$qb);
  }
  
  
  mysqli_close($con);
?>  