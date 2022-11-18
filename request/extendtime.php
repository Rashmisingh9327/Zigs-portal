 <?php
include("../connection.php");
$id=$_POST['id'];
mysqli_query($connection,"insert into `timer` values('','$id')");



$select_data = mysqli_query($connection, "select * from orders WHERE project_id='$id'");
for ($e = 0; $e < mysqli_num_rows($select_data); $e++) {
    $data = mysqli_fetch_array($select_data);

    $startdate="$data[3] $data[4]";

    $datenext=date('Y-m-d', strtotime("$startdate" . " +48 hour"));

mysqli_query($connection,"update orders set date='$datenext' , time='$data[4]' where project_id='$id'");

    }


?>