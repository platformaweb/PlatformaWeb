	<?php 
	
	session_start();
  	if($_SESSION['level'] != 'poweruser') {
    header('Location: images/nicetry.jpg');
    exit;
  }

	?>

<!DOCTYPE html>
<html>
<body>
	<head>
		<title>Platforma Web</title>
		<link rel="stylesheet" type="text/css" href="poweruserfooter.css">


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
        if($_SESSION['level'] == 'poweruser') 
        	{
        ?>
        	<div class="administratorcontrolpaneltext"> 
        	<a href="powerusercontrolpanel.php"><b>PowerUser Control Panel</b></a></div> 
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


  
<a class="btn btn:hover" href="#openModalSurvey"><b>Add Survey</b></a>



		<div id="openModalSurvey" class="modalDialogSurvey">
			<div>
		<a href="#close" title="Close" class="close">X</a>

	<form action="createsurvey.php" method="POST">
		<br>Choose the type of the Survey:<br>
			<select name="surveytype">
			<option value="naturalness">Naturalness</option>
			<option value="general">General</option>
			<option value="meanopinionscore">Mean Opinion Score</option>
			<option value="blabla">Blabla</option>
			</select>
		<br><br>Name of the Survey: <br><input type="text" name="surveyname">
		<script src="addInput.js" language="Javascript" type="text/javascript"></script>
<form method="POST">
     <div id="dynamicInput">
          Question 1<br><input type="text" name="myInputs[]">
     </div>
     <br><input type="button" value="Add another question (maximum 5 questions)." onClick="addInput('dynamicInput');">
</form>
<br>Number of questions inserted: <br><input type="text" name="nrofquestions" size="1">

<script src="addSounds.js" language="Javascript" type="text/javascript"></script>
<form method="POST">
     <div id="dynamicSound">
          Sound 1<br><input type="text" name="mySounds[]">
     </div>
     <br><input type="button" value="Add another sound file (maximum 5 sound files)." onClick="addSound('dynamicSound');">
</form>

<br>Number of sounds inserted: <br><input type="text" name="nrofsounds" size="1">



		</div>
	</form>
</div>




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




	</body>
</html>