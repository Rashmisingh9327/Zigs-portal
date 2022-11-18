<?php
include("../connection.php");
if (isset($_POST['amount'])) {
    $amount = mysqli_real_escape_string($connection, $_POST['amount']);
      $date = date("d-m-Y");
      $time = date("h:i:s");
      mysqli_query($connection, "INSERT into `payment` (`id`, `user_id`, `amount`, `status`, `time`, `date`) VALUES ('','$user_id','$amount','0','$time','$date')");
    }
 