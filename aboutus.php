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
			session_start();
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

 <?php 
if(isset($_SESSION['user'])) {
        if($_SESSION['level'] == 'poweruser') 
        	{
        ?>
        	<div class="administratorcontrolpaneltext"> 
        	<a href="poweruser.php"><b>PowerUser Control Panel</b></a></div> 
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

		
		<p class="fronttext"><b>About us</b></p>
					<p class="fronttext1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus enim massa, porta eget purus eget, efficitur vestibulum arcu. Duis libero purus, dictum eu vehicula laoreet, auctor vitae massa. Suspendisse vestibulum venenatis varius. Nullam sollicitudin ultricies pulvinar. Vivamus metus mi, dignissim non condimentum ut, sagittis ac velit. Fusce mattis odio sit amet lacus finibus, ut laoreet magna facilisis. Proin sit amet velit felis. Mauris felis magna, convallis sit amet sollicitudin ut, eleifend sit amet dolor. Suspendisse gravida posuere tortor quis mollis. Phasellus consectetur vulputate convallis. Suspendisse vel urna vitae eros tempus tincidunt quis sit amet turpis. Donec aliquam aliquet mi, quis eleifend ipsum sagittis sit amet. Maecenas quis iaculis dui.</p>

		
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
</div>


	</body>
</html>

