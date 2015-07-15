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
 $password = mysql_real_escape_string($_POST['password']);
 $firstname = mysql_real_escape_string($_POST['firstname']);
 $lastname = mysql_real_escape_string($_POST['lastname']);
 $confirmpassword = mysql_real_escape_string($_POST['confirmpassword']);
 $age = mysql_real_escape_string($_POST['age']);
 $gender = mysql_real_escape_string($_POST['gender']);

 $okay = preg_match('/^[A-z0-9_\-]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z.]{2,4}$/', $email);

if ($okay) {

} else {
   header("Location: index.php#openModalRegister1");
}


 
 $results1 = mysql_query("SELECT * FROM users WHERE user ='$user'"); 
if (mysql_num_rows($results1) != 0){

header("Location: index.php#openModalRegister1");
}




if ($_POST['password']!= $_POST['confirmpassword'])
 {
<<<<<<< HEAD
 	header("Location: index.php#openModalRegister1");
=======
<<<<<<< HEAD
     header("Location: index.php#openModalRegister");
=======
  header("Location: index.php#openModalRegister");
>>>>>>> origin/master

?>

<div class="wp">Wrong Password! </div>

<<<<<<< HEAD
<?php
=======
>>>>>>> origin/master
>>>>>>> origin/master
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

 }
}
}
?>