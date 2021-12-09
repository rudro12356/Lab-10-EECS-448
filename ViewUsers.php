<?php
  error_reporting(E_ALL);
  ini_set("display_error", 1);

  $mysqli = new mysqli("mysql.eecs.ku.edu", "r247r798", "geiFohh7",
  "r247r798");

  /* check connection */
  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }

  $query = "SELECT user_id FROM Users";
  $result = $mysqli->query($query);

  if (!$result) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysql_error();
    exit();
  }

  echo "<table style ='border-style : solid'> <th> User ID </th><br>";

    while ($row = $result -> fetch_assoc())
    {
      echo "<tr><td>".$row[user_id]."</td></tr>";
    }
  echo "</table>";

  $mysqli ->close();

?>
