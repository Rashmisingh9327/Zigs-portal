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
        <h1 class="text-center">All Records</h1>
        <br>
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <div class="input-group mb-4">
                <label class="pt-2">Select User Type: </label>&nbsp;&nbsp;
                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                <select class="form-control selectpicker countrypicker">
                  <option>Manager</option>
                  <option>User</option>
                  <option>Project</option>
                  <option>Payment</option>
                </select>
                <span class="input-group-text"><i class="ni ni-bold-down"></i></span>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <div class="input-group mb-4">
                <label class="pt-2">Month: </label>&nbsp;&nbsp;
                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                <select class="form-control selectpicker countrypicker">
                  <option value="1">January</option>
                  <option value="2">February</option>
                  <option value="3">March</option>
                  <option value="4">April</option>
                  <option value="5">May</option>
                  <option value="6">June</option>
                  <option value="7">July</option>
                  <option value="8">August</option>
                  <option value="9">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12">December</option>
                </select>
                <span class="input-group-text"><i class="ni ni-bold-down"></i></span>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <div class="input-group mb-4">
                <label class="pt-2">Year: </label>&nbsp;&nbsp;
                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                <select class="form-control selectpicker countrypicker">
                  <option value="2017">2017</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                  <option value="2026">2026</option>
                  <option value="2027">2027</option>
                  <option value="2028">2028</option>
                  <option value="2029">2029</option>
                  <option value="2030">2030</option>
                  <option value="2031">2031</option>
                  <option value="2032">2032</option>
                  <option value="2033">2033</option>
                  <option value="2034">2034</option>
                  <option value="2035">2035</option>
                  <option value="2036">2036</option>
                  <option value="2037">2037</option>
                  <option value="2038">2038</option>
                  <option value="2039">2039</option>
                  <option value="2040">2040</option>
                  <option value="2041">2041</option>
                  <option value="2042">2042</option>
                  <option value="2043">2043</option>
                  <option value="2044">2044</option>
                  <option value="2045">2045</option>
                  <option value="2046">2046</option>
                  <option value="2047">2047</option>
                  <option value="2048">2048</option>
                  <option value="2049">2049</option>
                  <option value="2050">2050</option>
                </select>
                <span class="input-group-text"><i class="ni ni-bold-down"></i></span>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <button type="button" class="btn bg-gradient-info">Get Data</button>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="table-responsive">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              <th class="text-uppercase text-secondary font-weight-bolder opacity-7">ID</th>
              <th class="text-uppercase text-secondary font-weight-bolder opacity-7 ps-2"> Username</th>
              <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Name</th>
              <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Role</th>
              <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Created Date</th>
              <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Export</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </form>
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