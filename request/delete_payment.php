<?php
include("../connection.php");
if(isset($_POST['row_id']))
{
$id=$_POST['row_id'];

mysqli_query($connection,"UPDATE payment SET status ='2' WHERE id='$id' ");

}
?>