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

<div class="naturalnessbutton"><a href="#openModalNaturalness"></a></div>

		<div id="openModalNaturalness" class="modalDialogNaturalness">
			<div>
		<a href="#close" title="Close" class="close">X</a>
		<div class="surveynaturalness"><b>Naturalness Survey</b><br></div>
		<div class="naturalnesspart1text"><b>Part 1/10</b></div>
		<div class="naturalnessquestiontext"><b>In this section you will be required to give your opinion about the naturalness of the sound you just heard.</b></div>
		<div class="naturalnessaudio1">
			<audio controls>
  			<source src="sounds/naturalness1.mp3" type="audio/mpeg">
			Your browser does not support the audio element.
			</audio>
		</div>
		<div class="naturalnessquestion"><b>After listening the sound, please evaluate how the naturalness of the sound is by selecting either excellent, good, fair, poor or bad.</b></div>
		<form action="naturalnesssurvey.php" method="POST">

	
	<label class="block"><input type="radio" name="naturalness1" value="Excellent">Excellent</label>
	<label class="block"><input type="radio" name="naturalness1" value="Good">Good</label>
	<label class="block"><input type="radio" name="naturalness1" value="Fair">Fair</label>
	<label class="block"><input type="radio" name="naturalness1" value="Poor">Poor</label>
	<label class="block"><input type="radio" name="naturalness1" value="Bad">Bad</label>
	<input class="submitnaturalness1" type="submit" name="naturalnesssurveysubmit">

		</form>
			</div>

		</div>

<div class="generalbutton"><a href="#openModalGeneral"></a></div>

		<div id="openModalGeneral" class="modalDialogGeneral">
			<div>
		<a href="#close" title="Close" class="close">X</a>
		<div class="surveynaturalness"><b>General Survey</b><br></div>
		<div class="generalpart1text"><b>Part 1/10</b></div>
		<div class="naturalnessquestiontext"><b>In this section you will be required to give your opinion about various aspects of the sound you just heard.</b></div>
		<div class="naturalnessaudio1">
			<audio controls>
  			<source src="sounds/naturalness1.mp3" type="audio/mpeg">
			Your browser does not support the audio element.
			</audio>
		</div>
		<div class="naturalnessquestion"><b>After listening the sound, please evaluate how some general aspects of the sound are by selecting either excellent, good, fair, poor or bad.</b></div>
		<form action="generalsurvey.php" method="POST">
			<br>Overall Quality Impression<br>
			<select name="quality1">
			<option value="1q0">0</option>
			<option value="1q1">1</option>
			<option value="1q2">2</option>
			<option value="1q3">3</option>
			<option value="1q4">4</option>
			<option value="1q5">5</option>
			<option value="1q6">6</option>
			<option value="1q7">7</option>
			<option value="1q8">8</option>
			<option value="1q9">9</option>
			<option value="1q10">10</option>
			</select>
			<br>Pleasantness<br>
			<select name="pleasantness1">
			<option value="1p0">0</option>
			<option value="1p1">1</option>
			<option value="1p2">2</option>
			<option value="1p3">3</option>
			<option value="1p4">4</option>
			<option value="1p5">5</option>
			<option value="1p6">6</option>
			<option value="1p7">7</option>
			<option value="1p8">8</option>
			<option value="1p9">9</option>
			<option value="1p10">10</option>
			</select>
			<br>Speech Pauses<br>
			<select name="speechpauses1">
			<option value="1sp0">0</option>
			<option value="1sp1">1</option>
			<option value="1sp2">2</option>
			<option value="1sp3">3</option>
			<option value="1sp4">4</option>
			<option value="1sp5">5</option>
			<option value="1sp6">6</option>
			<option value="1sp7">7</option>
			<option value="1sp8">8</option>
			<option value="1sp9">9</option>
			<option value="1sp10">10</option>
			</select>
			<br>Word Stress</br>
			<select name="wordstress1">
			<option value="1ws0">0</option>
			<option value="1ws1">1</option>
			<option value="1ws2">2</option>
			<option value="1ws3">3</option>
			<option value="1ws4">4</option>
			<option value="1ws5">5</option>
			<option value="1ws6">6</option>
			<option value="1ws7">7</option>
			<option value="1ws8">8</option>
			<option value="1ws9">9</option>
			<option value="1ws10">10</option>
			</select>
			<br>Intonation</br>
			<select name="intonation1">
			<option value="1i0">0</option>
			<option value="1i1">1</option>
			<option value="1i2">2</option>
			<option value="1i3">3</option>
			<option value="1i4">4</option>
			<option value="1i5">5</option>
			<option value="1i6">6</option>
			<option value="1i7">7</option>
			<option value="1i8">8</option>
			<option value="1i9">9</option>
			<option value="1i10">10</option>
			</select>
			<br>Emotion</br>
			<select name="emotion1">
			<option value="1e0">0</option>
			<option value="1e1">1</option>
			<option value="1e2">2</option>
			<option value="1e3">3</option>
			<option value="1e4">4</option>
			<option value="1e5">5</option>
			<option value="1e6">6</option>
			<option value="1e7">7</option>
			<option value="1e8">8</option>
			<option value="1e9">9</option>
			<option value="1e10">10</option>
			</select>
			<br>Listening Effort</br>
			<select name="listeningeffort1">
			<option value="1le0">0</option>
			<option value="1le1">1</option>
			<option value="1le2">2</option>
			<option value="1le3">3</option>
			<option value="1le4">4</option>
			<option value="1le5">5</option>
			<option value="1le6">6</option>
			<option value="1le7">7</option>
			<option value="1le8">8</option>
			<option value="1le9">9</option>
			<option value="1le10">10</option>
			</select>


<br><br>
<input type="submit" name="generalsurveysubmit">
</form>

		</form>
			</div>

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
</div>


	</body>
</html>

