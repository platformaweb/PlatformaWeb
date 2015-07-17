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



mysql_connect("localhost","root","") or die("not connect");
mysql_select_db("dbtest") or die ("not connect");

 $rs = mysql_query("SELECT user FROM users WHERE user ='$user' ") or die(mysql_error());


if($rs == $_POST['user']){
header("Location: index.php#openModalRegister1");
}


/*$res1 = "SELECT email FROM users"; 
$rs1 = mysql_query($res1) or die(mysql_error());
$row1 = mysql_fetch_array($rs1);

if($row1 == $email){
header("Location: index.php#openModalRegister1");
}
*/

if ($_POST['password']!= $_POST['confirmpassword'])
 {
 	header("Location: index.php#openModalRegister1");

?>

<div class="wp">Wrong Password! </div>

<?php
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