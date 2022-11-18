<?php
include("../connection.php");
$project_id = $_POST['project_id'];
$message = mysqli_real_escape_string($connection, $_POST['message']);

if (isset($_POST['type'])) {
    $message = mysqli_real_escape_string($connection, $_POST['message']);
    $image_name = $_FILES['file']['name'];
    $randomname = rand(100, 900);
    $tmpFilePath = $_FILES['file']['tmp_name'];
    $filepaths = "../assets/projectfiles/";
    $imagenewname = "$randomname" . $_FILES['file']['name'];
    $newFilePath = "$filepaths$imagenewname";
    if (move_uploaded_file($tmpFilePath, $newFilePath)) {
        mysqli_query($connection, "INSERT INTO `projectchat` (`id`, `project_id`, `sendby`, `description`, `image`, `seen`) VALUES (NULL, '$project_id', '$user_id', '$message', '$imagenewname', 0);");
        $namefile = substr($imagenewname, 3, 10000000);

        
mysqli_query($connection,"UPDATE orders set status='4' , date='' ,time='' where project_id='$project_id' LIMIT 1 ");

    } 
}
else {

        mysqli_query($connection, "INSERT INTO `projectchat` (`id`, `project_id`, `sendby`, `description`, `image`, `seen`) VALUES (NULL, '$project_id', '$user_id', '$message', '', 0);");

        
mysqli_query($connection,"UPDATE orders set status='4' , date='' ,time='' where project_id='$project_id' LIMIT 1 ");


    } 