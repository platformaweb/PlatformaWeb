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

$type= $_POST['surveytype'];
$nameq = $_POST['surveyname'];

$typeq = "INSERT INTO  survey(Type,Name)  VALUES ('$type','$name')";
$mysqli->query($query);
?>