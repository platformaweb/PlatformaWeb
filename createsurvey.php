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

$typeq= $_POST['surveytype'];
$nameq = $_POST['surveyname'];
$suser = $_SESSION['user'];


$qeri   = "INSERT INTO  survey(Type,Name)  VALUES ('$typeq','$nameq')";
$qeri3  = "INSERT INTO created_survey(id_user) VALUES('$suser') ";
$qeri4  = "INSERT INTO created_survey(id_survei) SELECT id_survey FROM survey";

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

if ($conn->multi_query($qeri4) === TRUE) {
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