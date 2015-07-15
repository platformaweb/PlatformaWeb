<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: index.php");
}
include_once 'dbconnect.php';

if(isset($_POST['register']))
{
 $user = mysql_real_escape_string($_POST['user']);
 $email = mysql_real_escape_string($_POST['email']);
 /*$password = md5(mysql_real_escape_string($_POST['password']));*/
 $password = mysql_real_escape_string($_POST['password']);
 $firstname = mysql_real_escape_string($_POST['firstname']);
 $lastname = mysql_real_escape_string($_POST['lastname']);
 /*$confirmpassword = mysql_real_escape_string($_POST['confirmpassword']));*/
 $confirmpassword = mysql_real_escape_string($_POST['confirmpassword']);
 $age = mysql_real_escape_string($_POST['age']);
 $gender = mysql_real_escape_string($_POST['gender']);

if ($_POST['password']!= $_POST['confirmpassword'])
 {
  header("Location: index.php#openModalRegister");



 }
else{
 if(mysql_query("INSERT INTO users(user,email,password,firstname,lastname,confirmpassword,age,gender) VALUES('$user','$email','$password','$firstname','$lastname','$confirmpassword','$age','$gender')"))
 {

  ?>
        <script type="text/javascript">
		alert("Successfully Registered. Redirecting to login page...");
		window.location.href = "index.php#openModal";


   
		</script>
       
		
        <?php
    }
 
 else
 {

header("Location: index.php#openModalRegister");
?>

<script>alert('Check your mail and username! ');</script>

<?php
 }
}
}
?>