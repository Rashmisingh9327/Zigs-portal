<?php
include("../connection.php");
if(isset($_POST['row_id']))
{
$id=$_POST['row_id'];
$date = date("d-m-Y");
$time=date("h:i:s");

mysqli_query($connection,"UPDATE orders SET status ='2' WHERE id='$id' ");

}
?>