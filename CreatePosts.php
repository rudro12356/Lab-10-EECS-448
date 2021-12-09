<?php

error_reporting(E_ALL);
ini_set("display_error", 1);

$mysqli = new mysqli("mysql.eecs.ku.edu", "r247r798", "geiFohh7",
"r247r798");

// echo "hello php";

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$uName = $_POST['uName'];
$posts = $_POST['posts'];

// check if the form is empty
if($uName =="")
{
    echo "Form is empty. Enter the user id.";
    exit();
}

if($posts =="")
{
    echo "Text box is empty.";
    exit();
}

$query = "SELECT user_id FROM Users";
$result = $mysqli->query($query);

//check if the user exists in the databse
$existingUser = FALSE;
if ($result->num_rows > 0)
{
    // echo "Entering if";
    while ($row = $result->fetch_assoc())
    {
        if ($row["user_id"] == $uName)
        {
            $existingUser = TRUE;
        }
    }
    $result -> free();
}

//print error if user is not present
if(!$existingUser)
{
    echo "User was not found. Sorry.";
    exit();
}

$sql = "INSERT INTO `Posts` (`posts`) VALUES ('". $uName ."', '". $posts ."')";

// $rs = mysqli_query($mysqli, $sql);

if($result = $mysqli->query($query))
{
	echo "User post was inserted.";
}

else
{
    echo "Post was not inserted.";
}

$mysqli -> close();
?>
