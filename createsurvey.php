<?php
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

$qeri = "INSERT INTO  survey(Type,Name)  VALUES ('$typeq','$nameq')";


if ($conn->query($qeri) === TRUE) {
    echo "New record created successfully";
} else {
  
}

$conn->close();


?>