<?php
  $msg = $_POST['msg'];
  $t=time();
  $date=date("d-m-Y",$t;
  $date=$t+"--"+$date;
  mysqli_query(mysqli_connect("localhost","root","","confessions"),"INSERT INTO message(msg_no,msg) VALUES('$date','$msg')" );
?>
