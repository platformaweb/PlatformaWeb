<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbtest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$user = $_POST['name']; 
$user1 = $_POST['name1']; 
$user2 = $_POST['name2']; 

$sql = "UPDATE users SET level='admin' WHERE user='$user' ";
$sql1 = "UPDATE users SET level='poweruser' WHERE user='$user1' ";
$sql2 = "UPDATE users SET level='user' WHERE user='$user2' ";



if ($conn->query($sql) === TRUE) {
    header("Location: admin.php");

    if ($conn->query($sql1) === TRUE) {
    header("Location: admin.php");
} 

if ($conn->query($sql2) === TRUE) {
    header("Location: admin.php");
} 


} 

else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?> 







