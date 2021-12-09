<?php
  $mysqli = new mysqli("mysql.eecs.ku.edu", "r247r798", "geiFohh7",
  "r247r798");

  /* check connection */
  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }

  $uName = $_POST['uName'];

  $query = "select * from Posts where user_id =   '". $uName."' ";



  if($result = $mysqli->query($query){
    echo "<table> <th>User id</th> <th>Post</th>";
    while($row = $result->fetch_assoc())
    {
      echo "<tr><td>".$row["post_Id"]. "</td><td>" .$row["content"]."</td></tr>";
    }
        echo "</table>";
    result->free();
  }
  $mysqli->close();




 ?>
