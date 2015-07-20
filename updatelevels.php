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


$user1 = $_POST['name']; 
$user3 = $_POST['name3'];
$lvl1 = $_POST['1'];


$sql =  "UPDATE users SET level= '$lvl1' WHERE user ='$user1' ";
$sql1 = "UPDATE users SET level= '$lvl1' WHERE user ='$user1' ";
$sql2 = "UPDATE users SET level= '$lvl1' WHERE user ='$user1' ";
$sql3 = "DELETE FROM users  Where user ='$user3'";

 if ($conn->query($sql3) === TRUE) {
  
 header("Location: admin.php");
}

if ($conn->query($sql) === TRUE) {
    header("Location: admin.php");
}
else {
    echo "Error updating record: " . $conn->error;
}

    if ($conn->query($sql1) === TRUE) {
    header("Location: admin.php");
}
else {
    echo "Error updating record: " . $conn->error;
}

    if ($conn->query($sql2) === TRUE) {
    header("Location: admin.php");
}

 else {
    echo "Error updating record: " . $conn->error;
}


if (isset($_POST['Delete'])) {


header("Location:#openModaldelete");

}


if (isset($_POST['Yes'])) {



}
print $user3;
print ($_POST['Yes']);



$conn->close();
?> 






