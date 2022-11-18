<?php
include("../connection.php");
if(isset($_POST['row_id']))
{
$id=$_POST['row_id'];

mysqli_query($connection,"delete from projects where id='$id' limit 1");


$select_data=mysqli_query($connection,"select * from project_image where project_id='$id'");
for($e=0;$e<mysqli_num_rows($select_data);$e++)
{
    $data=mysqli_fetch_array($select_data);

    $path="../assets/projectimages/ $data[2]";
    chown($path,666);
    unlink($path);
}

mysqli_query($connection,"delete from project_image where project_id='$id'");

}
?>