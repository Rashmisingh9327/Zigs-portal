<?php
include("../connection.php");
if(isset($_POST['project_id']))
{
    
date_default_timezone_set('Asia/Kolkata');

$id=$_POST['project_id'];
$date = date("d-m-Y");
$time=date("h:i:s a");

$check_order_exists = mysqli_query($connection, "SELECT * from orders where project_id='$id' and status='1' or  project_id='$id' and status='4' OR  project_id='$id' and status='5' OR  project_id='$id' and status='3'  ");
$check_order_count_e = mysqli_num_rows($check_order_exists);
if($check_order_count_e > 0)
{
echo"0";
}
else{
mysqli_query($connection,"INSERT INTO `orders` (`id`, `project_id`, `user_id`, `date`, `time`, `status`) VALUES (NULL, '$id', '$user_id', '$date', '$time', '1')");
mysqli_query($connection, "UPDATE projects set status='1' where id='$id' LIMIT 1 ");
echo"1";
}

}
?>