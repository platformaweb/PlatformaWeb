<?php

mysql_connect("localhost","root","") or die("not connect");
mysql_select_db("dbtest") or die ("not connect");

$output = '';

if(isset($_POST['search'])){
$searchq = $_POST['search'];


$query = mysql_query("SELECT * FROM users WHERE user LIKE '%$searchq%' ") or die("Could not connect!");
$count = mysql_num_rows($query);

if($count == 0)
{

	$output = 'There was no results!';
}
else{

while($row = mysql_fetch_array($query)){

	$fname = $row['firstname'];
    $lname = $row['lastname'];
    $email = $row['email'];
    $uname = $row['user'];
    $lvl   = $row['level'];

	$output = '<div> <b>Username:</b>' .$uname.' <br><b>Level:</b>' .$lvl.'<br> <b> Real Name: </b>'.$fname.' '.$lname.'<br><b>Email: </b>  '  .$email. '<br></div>';

echo ($output);
}

}

}
?>