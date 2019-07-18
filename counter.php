<?php
  mysqli_query(mysqli_connect("localhost","root","","confessions"),
  "UPDATE counter SET visits = visits+1 WHERE id = 1" );
 ?>
  
