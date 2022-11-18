<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="assets/css/image.css">
    <link rel="stylesheet" type="text/css" href="assets/css/hover.css">
    <link rel="stylesheet" type="text/css" href="assets/css/word.css">
    <link rel="stylesheet" type="text/css" href="assets/css/card.css">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
  </head>
  <body class="g-sidenav-show  bg-gray-100">
    <?php
    include 'sidenavbar.php';
    ?>
    <!-- main content start from hear -->
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
      <!-- navbar start from hear -->
      <?php  include 'navbar.php';?>
      <!-- End Navbar -->
      <form class="container-fluid">
        <br>
        <br>
        <section class="bg-white p-4">
        <h1 class="text-center">Add a Project</h1>
        <br>
        <div class="row">
          <div class="col-md-2">
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Project Name: </label>
              <div class="input-group mb-4">
                <span class="input-group-text"><i class="ni ni-ruler-pencil"></i></span>
                <input class="form-control" placeholder="Project Name" type="text">
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Amount: </label>
              <div class="input-group mb-4">
                <span class="input-group-text"><i class="ni ni-money-coins"></i></span>
                <input class="form-control" placeholder="Project Amount" type="text">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
          </div>
          <div class="col-md-8">
            <div class="form-group">
              <label>Files: </label>
              <div class="input-group mb-4">
                <span class="input-group-text"><i class="ni ni-single-copy-04"></i></span>
                <input type="file" class="form-control" id="form-control">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">          
        </div>
          <div class="col-md-8">
            <div class="form-group">
              <label>Description:</label>
              <div class="input-group mb-4">
                <span class="input-group-text"><i class="ni ni-bullet-list-67"></i></span>
                <textarea class="form-control" rows="5" placeholder="Project Description" id="Description"></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button type="button" class="btn bg-gradient-info" style="margin-left: 210px;">Submit</button>
    </form>
    </section>
  </div>
</main>
<!--   Core JS Files   -->
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="assets/js/plugins/chartjs.min.js"></script>
<script>
var ctx = document.getElementById("chart-bars").getContext("2d");
new Chart(ctx, {
type: "bar",
data: {
labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
datasets: [{
label: "Sales",
tension: 0.4,
borderWidth: 0,
borderRadius: 4,
borderSkipped: false,
backgroundColor: "#fff",
data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
maxBarThickness: 6
}, ],
},
options: {
responsive: true,
maintainAspectRatio: false,
plugins: {
legend: {
display: false,
}
},
interaction: {
intersect: false,
mode: 'index',
},
scales: {
y: {
grid: {
drawBorder: false,
display: false,
drawOnChartArea: false,
drawTicks: false,
},
ticks: {
suggestedMin: 0,
suggestedMax: 500,
beginAtZero: true,
padding: 15,
font: {
size: 14,
family: "Open Sans",
style: 'normal',
lineHeight: 2
},
color: "#fff"
},
},
x: {
grid: {
drawBorder: false,
display: false,
drawOnChartArea: false,
drawTicks: false
},
ticks: {
display: false
},
},
},
},
});
var ctx2 = document.getElementById("chart-line").getContext("2d");
var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);
gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors
var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);
gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors
new Chart(ctx2, {
type: "line",
data: {
labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
datasets: [{
label: "Mobile apps",
tension: 0.4,
borderWidth: 0,
pointRadius: 0,
borderColor: "#cb0c9f",
borderWidth: 3,
backgroundColor: gradientStroke1,
fill: true,
data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
maxBarThickness: 6
},
{
label: "Websites",
tension: 0.4,
borderWidth: 0,
pointRadius: 0,
borderColor: "#3A416F",
borderWidth: 3,
backgroundColor: gradientStroke2,
fill: true,
data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
maxBarThickness: 6
},
],
},
options: {
responsive: true,
maintainAspectRatio: false,
plugins: {
legend: {
display: false,
}
},
interaction: {
intersect: false,
mode: 'index',
},
scales: {
y: {
grid: {
drawBorder: false,
display: true,
drawOnChartArea: true,
drawTicks: false,
borderDash: [5, 5]
},
ticks: {
display: true,
padding: 10,
color: '#b2b9bf',
font: {
size: 11,
family: "Open Sans",
style: 'normal',
lineHeight: 2
},
}
},
x: {
grid: {
drawBorder: false,
display: false,
drawOnChartArea: false,
drawTicks: false,
borderDash: [5, 5]
},
ticks: {
display: true,
color: '#b2b9bf',
padding: 20,
font: {
size: 11,
family: "Open Sans",
style: 'normal',
lineHeight: 2
},
}
},
},
},
});
</script>
<script type="text/javascript">
// The timeout makes it comeback to original position after the designated time, it can be removed
document.querySelectorAll('.card-inner').forEach(item => {
var timeout;
clearTimeout(timeout);
item.addEventListener('click', el => {
if(item.style.transform == "rotateY(180deg) translateX(-100%)" ) {
item.style.transform = "rotateY(0deg)";
}
else {
item.style.transform = "rotateY(180deg) translateX(-100%)";
}
timeout = setTimeout(function() {
item.style.transform = "rotateY(0deg)";
}, 20000);
})
})
document.querySelectorAll('.card-inner-2').forEach(item => {
var timeout;
clearTimeout(timeout);
item.addEventListener('click', el => {
if(item.style.transform == "rotateY(180deg)" ) {
item.style.transform = "rotateY(0deg)";
}
else {
item.style.transform = "rotateY(180deg)";
}
timeout = setTimeout(function() {
item.style.transform = "rotateY(0deg)";
}, 20000);
})
})
document.querySelectorAll('.card-inner-3').forEach(item => {
var timeout;
clearTimeout(timeout);
item.addEventListener('click', el => {
if(item.style.transform == "rotateX(180deg)" ) {
item.style.transform = "rotateX(0deg)";
}
else {
item.style.transform = "rotateX(180deg)";
}
timeout = setTimeout(function() {
item.style.transform = "rotateX(0deg)";
}, 20000);
})
})
</script>
<script>
var win = navigator.platform.indexOf('Win') > -1;
if (win && document.querySelector('#sidenav-scrollbar')) {
var options = {
damping: '0.5'
}
Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
}
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>
</html>