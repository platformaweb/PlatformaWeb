	<?php 
	
	session_start();
  	if($_SESSION['level'] != 'admin') {
    header('Location: images/nicetry.jpg');
    exit;
  }

	?>

<!DOCTYPE html>
<html>
<body>
	<head>
		<title>Platforma Web</title>
		<link rel="stylesheet" type="text/css" href="style.css">


	</head>

<div class="background">
	<div class="content">

		<div class="header">

			
		</div>
		<div class="headerboxwithlineandbuttons">
			<div class="verticaltopline">
			</div>
			<div class="verticalbottomline">
			</div>

		</div>
		<ul class="menu">
					<li class="button1"><a href="index.php"></a></li>
					<li class="button2"><a href="surveys.php"></a></li>
					<li class="button3"><a href="tih.php"></a></li>
					<li class="button4"><a href="aboutus.php"></a></li>
					<li class="button5"><a href="contact.php"></a></li>

				</ul>
		<div class="loggedin">

         <?php  
			#session_start();
         	if(isset($_SESSION['user'])=="")
			{
				 print("Not logged. Please log in.");
			} 
			else
			{
				print('Welcome: ');
				print($_SESSION['user']);
				print('.');
				?>
				<div class="logoutbutton">&nbsp;<a href="logout.php?logout"><b>Logout</b></a></div>
				<?php

			}

         ?>
         
        </div>

                <?php 
if(isset($_SESSION['user'])) {
        if($_SESSION['level'] == 'admin') 
        	{
        ?>
        	<div class="administratorcontrolpaneltext"> 
        	<a href="admin.php"><b>Administrator Control Panel</b></a></div> 
        		<?php						
			} 
		}

				?>

		<div class="despartitorvertical"></div>
		<div class="despartitorvertical2"></div>
		<div class="despartitorvertical3"></div>
		<div class="despartitorvertical4"></div>

	 <?php 
if(isset($_SESSION['user'])) {

}
       
        else {
 ?>
        	<div class="modalClassLogin"><a href="#openModal"><b>Login</b></a></div>

		<div id="openModal" class="modalDialog">
			<div>
		<a href="#close" title="Close" class="close">X</a>
		<form method="post" action="login.php">
		Username:<br>
		<input type="text" name="user">
		<br>
		Password:<br>
		<input type="password" name="password" required>
		<br><br>
		<button type="submit" name="login">Login</button>

		</form>
			</div>
		</div>
				<?php


			}

				?>


<?php 
if(isset($_SESSION['user'])) {

}
       
        else {
 ?>
	<div class="modalClassRegister"><a href="#openModalRegister"><b>Register</b></a></div>

		<div id="openModalRegister" class="modalDialogRegister">
			<div>
		<a href="#close" title="Close" class="close">X</a>
		<form method="post" action="register.php">
		First Name:<br>
		<input type="text" name="firstname">
		<br>
		Last Name:<br>
		<input type="text" name="lastname">
		<br>
		Username:<br>
		<input type="text" name="user" required>
		<br>
		Password:<br>
		<input type="password" name="password" required>
		<br>
		Confirm Password:<br>
		<input type="password" name="confirmpassword" required>
		<br>
		Age:<br>
		<input type="number" name="age" maxlength="2" required>
		<br><br>
		Gender:<br>
		<input type="radio" name="gender" value="male">Male
		<br>
		<input type="radio" name="gender" value="female">Female
		<br><br>
		Email:<br>
		<input type:"email" name="email" required>
		

		<br><br>
		<button type="submit" name="register">Register</button>
		</form>
			</div>

		</div>

		<?php


			}

				?>

<?php 
$searchq = '';
$fname = '';
    $lname = '';
    $email = '';
    $uname = '';
    $lvl   = '';
    $age1  = '';
    $gen  = '';
mysql_connect("localhost","root","") or die("not connect");
mysql_select_db("dbtest") or die ("not connect");



if(isset($_POST['search'])){
$searchq = $_POST['search'];
$searchq = preg_replace("#[^0-9a-z]#i", "" , $searchq);


$query = mysql_query("SELECT * FROM users WHERE user LIKE '%$searchq%' ") or die("Could not connect!");
$count = mysql_num_rows($query);

if($count == 0)
{
	 
  
	$output = 'There was no results!';
}


while($row = mysql_fetch_array($query)){

	$fname = $row['firstname'];
    $lname = $row['lastname'];
    $email = $row['email'];
    $uname = $row['user'];
    $lvl   = $row['level'];
    $age1  = $row['age'];
    $gen   = $row['gender'];

	//$output .= '<div> <b>Username:</b>' .$uname.''.$count.'<br><b>Level:</b>' .$lvl.'<br> <b> Real Name: </b>'.$fname.' '.$lname.' Age:'.$age1.'Gender'.$gen.'<br><b>Email: </b>  '  .$email. '<br></div>';


}


}


if($searchq == ''){		
	?>	

		<table id="customers">
  <tr>
    <th>Username</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Email</th>
    <th>UserLevel</th>
  </tr>
  <?php
            $connect = mysql_connect("localhost","root", "");
            if (!$connect) {
                die(mysql_error());
            }
            mysql_select_db("dbtest");
            $results = mysql_query("SELECT * FROM users ");
            while($row = mysql_fetch_array($results)) {
            ?>
  <tr>
    <td><?php echo $row['user']?></td>
    <td><?php echo $row['firstname']?></td>
    <td><?php echo $row['lastname']?></td>
    <td><?php echo $row['age']?></td>
    <td><?php echo $row['gender']?></td>
    <td><?php echo $row['email']?></td>
    <td><?php echo $row['level']?>

  </tr>


 
  <?php
}
            }
            else{
            ?>


<table id="customers">
  <tr>
    <th>Username</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Email</th>
    <th>UserLevel</th>
  </tr>



<tr>
    <td><?php echo $uname; ?></td>
    <td><?php echo $fname; ?></td>
    <td><?php echo $lname; ?></td>
    <td><?php echo $age1;  ?></td>
    <td><?php echo $gen;   ?></td>
    <td><?php echo $email; ?></td>
    <td><?php echo $lvl;   ?>

  </tr>
<?php 
}
?>







    
</table>

<form action="updatelevels.php" method="post">
<div class="butondeactualizare">
      
Enter Username to grant privileges:      <br><input type="text" name="name" size="15"><br>


<input type="radio"     name="1"    value="Admin"   > Admin<br>
<input type="radio"     name="1"    value="Power User" > PW<br>
<input type="radio"     name="1"    value="User"   >User<br> <br>
<input type="submit">


</div>

<div class="delete">
Enter Username to be deleted:<br><input type="text" name="name3" size="15"><br>
<input type="submit" name="Delete" value="Delete" ></button>

</div>
</form>


<form action="admin.php" method="post">
<div class="search">

	<input type="text" name="search" size="15" placeholder="Search for username..."/>
     <input type="submit" value="Search"></button></div>


</form>


	

		<div class="buttons">
			<footer class="footer"><p class="copyright">Copyright &reg; Hadarau Rares-Horatiu & Lapusan Mirel</p>
					<ul class="footerbuttons">
						<li><a href="index.php">Home</a></li>
						<li><a href="surveys.php">Surveys</a></li>
						<li><a href="tih.php">T.I.H</a></li>
						<li><a href="aboutus.php">About Us</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
					<div class="horizontalfooterline"></div>
					
				</footer>
			

		 </div>






	</div>
<div id="openModaldelete" class="modalDialogdelete">

            <div>
		<a href="#close" title="Close" class="close">X</a>
		<form  action="updatelevels.php" method="post">
		Are you sure you want to delete ?<br>
		<br>
		<input type="submit" name="Yes"  value="Yes">
		<input type="submit" name="No"   Value="No">
		</form>
			</div>

      
</div>


</div>



	</body>
</html>