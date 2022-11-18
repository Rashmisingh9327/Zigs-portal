<?php
include("connection.php");
include("notification.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Title</title>
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
  <!-- BOOTSTRAP CSS LINK -->
  <link rel="stylesheet" href="assets/libs/Bootstrap/css/bootstrap.min.css" />
  <!-- SWIPER JS LINK -->
  <link rel="stylesheet" href="assets/libs/swiperJs/css/swiper-bundle.min.css" />
  <!--for upload image-->
  <link rel="stylesheet" href="assets/css/uploadfile.css" />
  <!-- CSS ANIMATION LINK -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
 <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<script src="assets/js/jquery-1.10.2.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.form.js"></script>-->
		
  <style>
    /* Import Google font - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

.wrapper{
  width: 430px;
  background: #fff;
  border-radius: 5px;
  padding: 30px;
  box-shadow: 7px 7px 12px rgba(0,0,0,0.05);
}
.wrapper header{
  color: #6990F2;
  font-size: 27px;
  font-weight: 600;
  text-align: center;
}
.wrapper form{
  height: 167px;
  display: flex;
  cursor: pointer;
  margin: 30px 0;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  border-radius: 5px;
  border: 2px dashed #6990F2;
}
form :where(i, p){
  color: #6990F2;
}
form i{
  font-size: 50px;
}
form p{
  margin-top: 15px;
  font-size: 16px;
}

section .row{
  margin-bottom: 10px;
  background: #E9F0FF;
  list-style: none;
  padding: 15px 20px;
  border-radius: 5px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
section .row i{
  color: #6990F2;
  font-size: 30px;
}
section .details span{
  font-size: 14px;
}
.progress-area .row .content{
  width: 100%;
  margin-left: 15px;
}
.progress-area .details{
  display: flex;
  align-items: center;
  margin-bottom: 7px;
  justify-content: space-between;
}
.progress-area .content .progress-bar{
  height: 6px;
  width: 100%;
  margin-bottom: 4px;
  background: #fff;
  border-radius: 30px;
}
.content .progress-bar .progress{
  height: 100%;
  width: 0%;
  background: #6990F2;
  border-radius: inherit;
}
.uploaded-area{
  max-height: 232px;
  overflow-y: scroll;
}
.uploaded-area.onprogress{
  max-height: 150px;
}
.uploaded-area::-webkit-scrollbar{
  width: 0px;
}
.uploaded-area .row .content{
  display: flex;
  align-items: center;
}
.uploaded-area .row .details{
  display: flex;
  margin-left: 15px;
  flex-direction: column;
}
.uploaded-area .row .details .size{
  color: #404040;
  font-size: 11px;
}
.uploaded-area i.fa-check{
  font-size: 16px;
}

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

  <!-- CUSTOM CSS LINK -->
  <link rel="stylesheet" href="assets/css/dashboard.css" />
</head>

<body>


  <!--  Main Dashboard -->
  <!--Main Navigation-->
  <?php include("nav.php"); ?>
  <!--Main Navigation-->

  <main style="margin-top: 30px">
    <div class="container">

      <body>
        <div class="py-5">
          <div class="container">
              
              <br />
			
			<br />
		<!--	<div class="panel panel-default">
				<div class="panel-heading"><b>Ajax File Upload Progress Bar using PHP JQuery</b></div>
				<div class="panel-body">
					<form id="uploadImage" action="upload.php" method="post">
						<div class="form-group">
							<label>File Upload</label>
							<input type="file" name="uploadFile" id="uploadFile" accept=".jpg, .png" />
						</div>
						<div class="form-group">
							<input type="submit" id="uploadSubmit" value="Upload" class="btn btn-info" />
						</div>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<div id="targetLayer" style="display:none;"></div>
					</form>
					<div id="loader-icon" style="display:none;"><img src="loader.gif" /></div>
				</div>
			</div>-->
            <div class="row hidden-md-up">
              <div class="col-md-10 text-center m-auto">
                <div class="container">
                  <form action="add-project.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-6 p-2">  
                        <label class="w-100 text-left pb-1">Project Name</label>
                        <div class="form-group input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="fa fa-file-signature"></i>
                            </span>
                          </div>
                          <input class="form-control" name="project_name" placeholder="Project Name" id="project_name" required type="text" />
                        </div>
                      </div>

                    


                      <div class="col-md-6  p-2">
                        <label class="w-100 text-left pb-1">Amount</label>
                        <label class="sr-only" for="inlineFormInputGroupUsername2">Amount</label>
                        <div class="input-group mb-2 mr-sm-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-dollar-sign"></i>
                            </div>
                          </div>
                          <input type="number" class="form-control"  onkeydown="return event.keyCode !== 69"   name="project_amount" id="enter_amount" required placeholder="Project Amount" />
                        </div>
                      </div>
<div class="wrapper">
    <header>File Uploader JavaScript</header>
    <form action="#">
      <input class="file-input" type="file" name="file" >
      <i class="fas fa-cloud-upload-alt"></i>
      <p>Browse File to Upload</p>
    </form>
    <section class="progress-area"></section>
    <section class="uploaded-area"></section>
  </div>

                      <div class="col-md-12 p-2">
                        <label class="w-100 text-left pb-1">FIles</label>
                        
                        <div class="input-group mb-2 mr-sm-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-file"></i>
                            </div>
                          </div>
                          <input type="file" multiple name="project_image[]" class="form-control" id="inlineFormInputGroupUsername2" required placeholder="Upload FIles" />
                        </div>
                      </div>


                      <div class="col-md-12 p-2">
                        <label class="w-100 text-left pb-1">Description</label>
                        <div class="input-group mb-3 mr-sm-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fa fa-tasks" aria-hidden="true"></i>
                            </div>
                          </div>

                          <textarea class="form-control" required name="project_description" placeholder="Project Description" id="project_description" maxlength="5000" cols="10" rows="10"></textarea>
                        </div>
                        <div class="col-md-12 d-flex">
                          <input type="submit" name="add_project" class="btn btn-primary send_project_notifi bg-primary w-100" />
                        </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </body>
    </div>
  </main>
  <div class="message_alert"></div>

  <!--Main layout-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="assets/libs/Bootstrap/js/jquery-3.4.1.slim.min.js"></script>
  <script src="assets/libs/Bootstrap/js/popper.min.js"></script>
  <script src="assets/libs/Bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/script.js"></script>

  <!--  SWIPER JS LINK  -->
  <script src="assets/libs/swiperJs/js/swiper-bundle.min.js"></script>

  <script src="assets/js/index.js"></script>
  <script>
    $("#nav_addproject").addClass("active");
  </script>
<script type="text/javascript">
  const form = document.querySelector("form"),
fileInput = document.querySelector(".file-input"),
progressArea = document.querySelector(".progress-area"),
uploadedArea = document.querySelector(".uploaded-area");

// form click event
form.addEventListener("click", () =>{
  fileInput.click();
});

fileInput.onchange = ({target})=>{
  let file = target.files[0]; //getting file [0] this means if user has selected multiple files then get first one only
  if(file){
    let fileName = file.name; //getting file name
    if(fileName.length >= 12){ //if file name length is greater than 12 then split it and add ...
      let splitName = fileName.split('.');
      fileName = splitName[0].substring(0, 13) + "... ." + splitName[1];
    }
    uploadFile(fileName); //calling uploadFile with passing file name as an argument
  }
}

// file upload function
function uploadFile(name){
  let xhr = new XMLHttpRequest(); //creating new xhr object (AJAX)
  xhr.open("POST", "php/upload_file.php"); //sending post request to the specified URL
  xhr.upload.addEventListener("progress", ({loaded, total}) =>{ //file uploading progress event
    let fileLoaded = Math.floor((loaded / total) * 100);  //getting percentage of loaded file size
    let fileTotal = Math.floor(total / 1000); //gettting total file size in KB from bytes
    let fileSize;
    // if file size is less than 1024 then add only KB else convert this KB into MB
    (fileTotal < 1024) ? fileSize = fileTotal + " KB" : fileSize = (loaded / (1024*1024)).toFixed(2) + " MB";
    let progressHTML = `<li class="row">
                          <i class="fas fa-file-alt"></i>
                          <div class="content">
                            <div class="details">
                              <span class="name">${name} • Uploading</span>
                              <span class="percent">${fileLoaded}%</span>
                            </div>
                            <div class="progress-bar">
                              <div class="progress" style="width: ${fileLoaded}%"></div>
                            </div>
                          </div>
                        </li>`;
    // uploadedArea.innerHTML = ""; //uncomment this line if you don't want to show upload history
    uploadedArea.classList.add("onprogress");
    progressArea.innerHTML = progressHTML;
    if(loaded == total){
      progressArea.innerHTML = "";
      let uploadedHTML = `<li class="row">
                            <div class="content upload">
                              <i class="fas fa-file-alt"></i>
                              <div class="details">
                                <span class="name">${name} • Uploaded</span>
                                <span class="size">${fileSize}</span>
                              </div>
                            </div>
                            <i class="fas fa-check"></i>
                          </li>`;
      uploadedArea.classList.remove("onprogress");
      // uploadedArea.innerHTML = uploadedHTML; //uncomment this line if you don't want to show upload history
      uploadedArea.insertAdjacentHTML("afterbegin", uploadedHTML); //remove this line if you don't want to show upload history
    }
  });
  let data = new FormData(form); //FormData is an object to easily send form data
  xhr.send(data); //sending form data
}

</script>
<script>
      $(document).on("click", ".send_project_notifi", function() {
        var inputamount = $("#enter_amount").val().trim();
        var description_p=$("#project_description").val().trim();
        var project_name=$("#project_name").val();

        if (inputamount != "" && description_p != "" && project_name != "") {
                     var socketdata = [{

              },
              {
                'notification': '1'
              }
            ];
            conn.send(JSON.stringify(socketdata));
          }
      });

      $(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var minDate= year + '-' + month + '-' + day;
    
    $('#txtDate').attr('min', minDate);
});

    </script>


</body>

</html>


<script>
$(document).ready(function(){
	$('#uploadImage').submit(function(event){
		if($('#uploadFile').val())
		{
			event.preventDefault();
			$('#loader-icon').show();
			$('#targetLayer').hide();
			$(this).ajaxSubmit({
				target: '#targetLayer',
				beforeSubmit:function(){
					$('.progress-bar').width('50%');
				},
				uploadProgress: function(event, position, total, percentageComplete)
				{
					$('.progress-bar').animate({
						width: percentageComplete + '%'
					}, {
						duration: 1000
					});
				},
				success:function(){
					$('#loader-icon').hide();
					$('#targetLayer').show();
				},
				resetForm: true
			});
		}
		return false;
	});
});
</script>

<?php
if (isset($_POST['add_project'])) {
  $name = mysqli_real_escape_string($connection, $_POST['project_name']);
  $amount = $_POST['project_amount'];
  $description = mysqli_real_escape_string($connection, $_POST['project_description']);
  $date = date("d-m-Y");
  $time = date("h:i:s");

  // project status 0 = not accepted , 1 = working , 2 = completed
  mysqli_query($connection, "INSERT INTO `projects` (`id`, `name`, `deadline`, `amount`, `p_desc`, `date`, `time`, `post_by`, `status`,role) VALUES (NULL, '$name', '', '$amount', '$description', '$date', '$time', '$user_id', '0','4');");




  $mysqli_insert_id = mysqli_insert_id($connection);

  $image_name = $_FILES['project_image']['name'];
  $total = count($_FILES['project_image']['name']);
  for ($i = 0; $i < $total; $i++) {

    $randomname = rand(100, 900);

    $tmpFilePath = $_FILES['project_image']['tmp_name'][$i];
    if ($tmpFilePath != "") {
      $filepaths = "assets/projectimages/";
      $imagenewname = "$randomname" . $_FILES['project_image']['name'][$i];
      $newFilePath = "$filepaths$imagenewname";
      if (move_uploaded_file($tmpFilePath, $newFilePath)) {

        mysqli_query($connection, "INSERT INTO `project_image` (`id`, `project_id`, `image_name`) VALUES (NULL, '$mysqli_insert_id', '$imagenewname')");
      }
    }
  }
  ?>
<script>
alert("Successfully Add Project .");
window.location="add-project.php";
  </script>
  <script>
$(document).ready(function(){
	$('#uploadImage').submit(function(event){
		if($('#uploadFile').val())
		{
			event.preventDefault();
			$('#loader-icon').show();
			$('#targetLayer').hide();
			$(this).ajaxSubmit({
				target: '#targetLayer',
				beforeSubmit:function(){
					$('.progress-bar').width('50%');
				},
				uploadProgress: function(event, position, total, percentageComplete)
				{
					$('.progress-bar').animate({
						width: percentageComplete + '%'
					}, {
						duration: 1000
					});
				},
				success:function(){
					$('#loader-icon').hide();
					$('#targetLayer').show();
				},
				resetForm: true
			});
		}
		return false;
	});
});
</script>

  <?php
}
?>