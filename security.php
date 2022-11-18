<?php
$login_auth=$_SESSION['login_auth'];
$page=basename($_SERVER['PHP_SELF']);
if($login_auth == 3)
{
    switch($page)
    {
        case "add-manager.php";
        header("Location: 403.php");
        break;

        case "add-project.php";
        header("Location: 403.php");
        break;

        case "orders.php";
        header("Location: 403.php");
        break;

        case "update-project.php";
        header("Location: 403.php");
        break;

        case "requests.php";
        header("Location: 403.php");
        break;
        case "paymentrequest.php";
        header("Location: 403.php");
        break;
        case "pendingprojects.php";
        header("Location: 403.php");
        break;
        case "updateaccount.php";
        header("Location: 403.php");
        break;
     }
}




if($login_auth == 2)
{
    switch($page)
    {
        case "add-manager.php";
        header("Location: 403.php");
        break;
        case "paymentrequest.php";
        header("Location: 403.php");
        break;
        case "chat.php";
        header("Location: 403.php");
        break;
        case "currentproject.php";
        header("Location: 403.php");
        break;
        case "previousprojects.php";
        header("Location: 403.php");
        break;
        case "payment.php";
        header("Location: 403.php");
        break;
        case "updateaccount.php";
        header("Location: 403.php");
        break;
        case "currentproject.php";
        header("Location: 403.php");
        break;
       }
}
if($login_auth == 1)
{
    switch($page)
    {
        case "currentproject.php";
        header("Location: 403.php");
        break;
    }
}
?>