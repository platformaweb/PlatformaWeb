<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: surveys.php");
}

include_once 'dbconnect.php';

if(isset($_POST['generalsurveysubmit']))
{	

 $quality1 = mysql_real_escape_string($_POST['quality1']);
 $pleasantness1 = mysql_real_escape_string($_POST['pleasantness1']);
 $speechpauses1 = mysql_real_escape_string($_POST['speechpauses1']);
 $wordstress1 = mysql_real_escape_string($_POST['wordstress1']);
 $intonation1 = mysql_real_escape_string($_POST['intonation1']);
 $emotion1 = mysql_real_escape_string($_POST['emotion1']);
 $listeningeffort1 = mysql_real_escape_string($_POST['listeningeffort1']);



 if(mysql_query("INSERT INTO generalsurvey(quality1,pleasantness1,speechpauses1,wordstress1,intonation1,emotion1,listeningeffort1) VALUES('$quality1','$pleasantness1','$speechpauses1','$wordstress1','$intonation1','$emotion1','$listeningeffort1')"))
 {

  ?>
        <script type="text/javascript">
		alert("Thank you for your time. Survey complete. Redirecting to part 2 of the General test.");
		window.location.href = "index.php#openModal";


   
		</script>
       
		
        <?php
    }
 
 else
 {

#header("Location: surveys.php#openModalGeneral");
print($quality1);




 }

}
?>