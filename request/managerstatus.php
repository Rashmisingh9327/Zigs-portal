<?php
include("../connection.php");
if(isset($_POST['row_id']))
{
$id=$_POST['row_id'];
$status=$_POST['status'];

if($status == "active")
{
    mysqli_query($connection,"UPDATE accounts set user_isActive = 'active' where user_id='$id' ");
}
else if($status == "unactive")
{
    mysqli_query($connection,"UPDATE accounts set user_isActive = 'unactive' where user_id='$id' ");
}



}
?>