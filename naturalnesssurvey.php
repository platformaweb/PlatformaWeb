<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: surveys.php");
}
include_once 'dbconnect.php';

if(isset($_POST['naturalnesssurveysubmit']))
{	
 $naturalness1 = mysql_real_escape_string($_POST['naturalness1']);



 if(mysql_query("INSERT INTO naturalnesssurvey(naturalness1) VALUES('$naturalness1')"))
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

header("Location: surveys.php#openModalGeneral");




 }

}
?>