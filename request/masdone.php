<?php
include("../connection.php");
$id=$_POST['id'];
if(isset($_POST['type']))
{
//status 4 = Request Send For Done
mysqli_query($connection,"UPDATE orders set status='4' , date='' ,time='' where id='$id' LIMIT 1 ");

}
else
{
//status 3 = done project
$date = date("d-m-Y");
mysqli_query($connection,"UPDATE orders set status='3' , donedate='$date'  where id='$id' LIMIT 1 ");
$select_data=mysqli_query($connection,"SELECT * from orders where id='$id' LIMIT 1");
for($e=0;$e<mysqli_num_rows($select_data);$e++)
{
    $rows=mysqli_fetch_array($select_data);
// status 3 = Done Project
    mysqli_query($connection,"UPDATE projects set status='3' ,chat='0'  where id='$rows[1]' LIMIT 1 ");
}
}