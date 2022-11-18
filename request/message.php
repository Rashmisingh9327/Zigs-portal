<?php
include("../connection.php");
$date = date("d-m-Y");
$time = date("h:i:s");
$project_id = $_POST['project_id'];
if(isset($_POST['sendby'])){
$postby=$_POST['sendby'];
if($postby == 2){
    mysqli_query($connection,"UPDATE projects set chat='2' where id='$project_id' LIMIT 1");
}
else
{
    mysqli_query($connection,"UPDATE projects set chat='1' where id='$project_id' LIMIT 1");
}
}


if (isset($_POST['type'])) {
    $message = mysqli_real_escape_string($connection,$_POST['message']);
    mysqli_query($connection, "INSERT INTO `chat` (`id`, `user_id`, `message`, `type`, `date`, `time`, `project_id`) VALUES (NULL,'$user_id','$message','0','$date','$time','$project_id');");
    echo "
<li class='user-message-wrapper bg-transparent__'>
<p class='user-message'>";echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8');echo"</p>
<span class='user-message-time'>$time</span>
</li>
";
} else {

    
    $user_idd=$_POST['adminormanagerid'];
    $image_name = $_FILES['file']['name'];
    $randomname = rand(100, 900);
    $tmpFilePath = $_FILES['file']['tmp_name'];
    $filepaths = "../assets/chatfiles/";
    $imagenewname = "$randomname" . $_FILES['file']['name'];
    $newFilePath = "$filepaths$imagenewname";
    if (move_uploaded_file($tmpFilePath, $newFilePath)) {
        mysqli_query($connection, "INSERT INTO `chat` (`id`, `user_id`, `message`, `type`, `date`, `time`,`project_id`) VALUES (NULL,'$user_id','$imagenewname','1','$date','$time','$project_id');");
        $namefile = substr($imagenewname, 3, 10000000);
        echo
        "
        <li class='user-message-wrapper bg-transparent__'>
        <div class='card card_body2 '>
                                    <div class='card-body ml-auto'>
                                        <div class='container-fluid'>
                                            <div class='row'>
                                                <div class='col text-left align-self-center'>
                                                    <h5>$namefile</h5>
                                                </div>
                                                <div class='col text-right'><a href='assets/chatfiles/$imagenewname' download><button type='button' class='btn btn-primary bg-primary btn-small mt-2 text-right'>Download</button></a></div>
                                            </div>
                                        </div>
    
                                    </div>
                                </div>
        </li>
        ";
    }
    ?>
<script>   
  var socketdata = [
                    {
                    'project_id': <?php echo"$project_id"; ?>,
                    'message':'<?php echo"$imagenewname"; ?>',
                    'type': 1,
                    'user_id': <?php echo "$user_id"; ?>,
                'adminormanagerid':<?php echo"$user_idd"; ?>
                },
                {
                'notification':'0'
                }
            ];
        conn.send(JSON.stringify(socketdata));
</script>
<?php
}
?>