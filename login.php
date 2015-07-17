<?php
session_start();
include_once 'dbconnect.php';

/*print($_POST['user']); printare */

/*if(isset($_SESSION['user'])!="")
{
 header("Location: index1.php");
}*/

if(isset($_POST['login']))
{
 $user = mysql_real_escape_string($_POST['user']);
 $password = mysql_real_escape_string($_POST['password']);
 $res=mysql_query("SELECT * FROM users WHERE user='$user'");
 $row=mysql_fetch_array($res);
 if($row['password']==$password)
 {
 	$_SESSION['level'] = $row['level']; 
  $_SESSION['user'] = $row['user'];

  if($row['level'] == 'admin') {
  	header("Location: admin.php");

  }

  else {
  	header("Location: index.php");
  }

  
  
  
 }
 else
 {
  ?>

       	<script type="text/javascript">
		alert("Username or password incorrect. Try again.");
		window.location.href = "index.php#openModal";
		</script>

        <?php




 }
 
 /*if($_SESSION['level'] !== 'admin'){
        	 header("Location: admin.php");
        	}
        	else {
        		header("Location: index.php");

        	}*/
}
?>