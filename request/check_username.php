<?php
include("../connection.php");
$username = $_POST['username'];
$select_data=mysqli_query($connection,"select * from accounts where user_name='$username'   limit 1");
$count = mysqli_num_rows($select_data);
echo"$count";
?>