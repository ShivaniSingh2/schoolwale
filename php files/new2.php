<?php
  session_start();
  $cat=$_GET['category'];
  $_SESSION['cat']=$cat;
  
  if($cat=="book")
  {
	  $a="std";
	  $b="publication";
    
  }
  elseif($cat=="shoes")
  {
	  $a="company";
	  $b="size";
  }
  elseif($cat=="stationary")
  {
	  $a="company";
	  $b="hj";
  }
  elseif($cat=="dress")
  {
	  $a="school";
	  $b="size";
  }
  elseif($cat=="bag")
  {
	  $a="company";
	  $b="size";
  }
  $i1="att1";
  $i2="att2";
   echo"<lable id=$i1>$a</lable>";
   echo"<lable id=$i2>$b</lable>";
?>