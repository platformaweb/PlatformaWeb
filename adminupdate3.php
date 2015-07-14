<?php

if (isset($_POST['update'])) {


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbtest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$stmt = $conn->stmt_init();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $mysqli->prepare("UPDATE users SET
   level = ?  
   WHERE user_id = ?");
$stmt->bind_param('ss',
   $_POST['level'],
   $_POST['user_id']);
$stmt->execute(); 
$stmt->close();

$conn->close();
?> 