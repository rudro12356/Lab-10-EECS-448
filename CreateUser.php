<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "r247r798", "geiFohh7", 
"r247r798");

// echo "hello php";

/* check connection */ 
if ($mysqli->connect_errno) { 
    printf("Connect failed: %s\n", $mysqli->connect_error); 
    exit(); 
} 
 
$uName = $_POST['uName'];

// check if the form is empty
if($uName =="")
{
    echo "Form is empty. Enter the user id.";
    exit();
}

//sql command to insert into tables
$sql = "INSERT INTO `Users` (`user_id`) VALUES ('$uName');";

//insert in database 
$rs = mysqli_query($mysqli, $sql);

if($rs)
{
	echo "User id Inserted.";
}

 
/* close connection */ 
$mysqli->close(); 
?>