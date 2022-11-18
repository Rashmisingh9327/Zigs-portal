<?php
session_start();
$connection=mysqli_connect("localhost:3307","root","","np2");
if($connection){}
else{
    echo"Database Connection Failed ! ";
}
if(!isset($_SESSION['user_id'])){
    $user_id=null;  
}
else{
    $user_id=$_SESSION['user_id'];    
}
if(!isset($_SESSION['login_auth'])){
$_SESSION['login_auth'] = "";
}
else{
$login_auth=$_SESSION['login_auth'];
}
include("security.php");
date_default_timezone_set('Asia/Kolkata');
?>
