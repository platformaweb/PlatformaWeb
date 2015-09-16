<?php

session_start();
if (isset($_SESSION['level'])=='creator'){
$servername = "localhost";
$username = "root";
$password= "";
$dbname = "dbtest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nameq = $_POST['surveyname'];
$autorq = $_POST['autor'];
$infoq = $_POST['info'];
$instrq = $_POST['instr'];

$qeri   = "INSERT INTO  survey(Name)  VALUES ('$nameq')";
$qeri3  = "INSERT INTO created_survey(Survey_Name,Autor,Descriere,Instructiuni) VALUES('$nameq','$autorq','$infoq','$instrq') ";



if ($conn->query($qeri) === TRUE) {
    echo "New record created successfully";
} else {
  echo "wrong output";
}

if ($conn->multi_query($qeri3) === TRUE) {
    echo "New record created successfully";
} else {
  echo "wrong output";
}


$conn->close();
}
else{

	echo "You do not have the rights!";
}


?>