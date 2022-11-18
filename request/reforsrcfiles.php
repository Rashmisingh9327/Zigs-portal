<?php
include("../connection.php");
$id=$_POST['id'];
//status 4 = Request Send For Done
mysqli_query($connection,"UPDATE orders set status='7' , date='' ,time='' where id='$id' LIMIT 1 ");
