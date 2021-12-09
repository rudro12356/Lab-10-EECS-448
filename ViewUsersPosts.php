<?php
  $mysqli = new mysqli("mysql.eecs.ku.edu", "r247r798", "geiFohh7",
  "r247r798");

  /* check connection */
  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }

  $uName = $_POST['uName'];

  $query = "select user_id from Posts where user_id =   '". $uName."' ";



  if($result = $mysqli->query($query){

    while($row = $result->fetch_assoc())
    {
        print("<td> ".$row[]'post_id']."</td>");
        print("<td> ".$row[]'content']."</td>");

    }

    $result->free();
  }
  $mysqli->close();




 ?>
