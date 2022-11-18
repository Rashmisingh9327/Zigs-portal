<?php
include("../connection.php");
$usermail = $_POST['check_mail'];
$select_data=mysqli_query($connection,"select * from accounts where user_email='$usermail' limit 1");
$count = mysqli_num_rows($select_data);
echo"$count";
?>