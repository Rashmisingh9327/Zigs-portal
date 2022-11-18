<?php
include("../connection.php");
$id=$_POST['id'];
$date = date("d-m-Y");
$time=date("h:i:s a");
//status 4 = Request for restart project


mysqli_query($connection,"UPDATE orders set status='6'  , date='$date' ,time='$time' where id='$id' LIMIT 1 ");
