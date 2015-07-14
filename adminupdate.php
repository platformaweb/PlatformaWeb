<?php 
mysql_connect("localhost", "root", "") or die("Connection Failed"); 
mysql_select_db("dbtest")or die("Connection Failed");
 $user = $_POST['user']; 
 $level = $_POST['level']; 
 $query = "UPDATE users SET level = '$level' WHERE Username = '$user'";
  if(mysql_query($query)){ 
  	echo "updated";
  } 
  	else{ 
  		echo "fail";
  	} 
  	?> 