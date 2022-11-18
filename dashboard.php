<?php
include("connection.php");
include("notification.php");
if ($user_id == null) {
?>
  <script>
    window.location = "login.php";
  </script>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
 <title>
 zigsportal.xyz
  </title>
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
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
  <?php
include 'sidenavbar.php'; 
  ?>
<!-- main content start from hear -->
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- navbar start from hear -->
    <?php  include 'navbar.php';?>

       <?php
      $login_auth = $_SESSION['login_auth'];
      if ($login_auth == 3) {
        include("request/userdashboard.php");
      } else if ($login_auth == 2) {
        include("request/managerdashboard.php");
      } else if ($login_auth == 1) {
        // include("request/admindashboard.php");
      }
      ?>

    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row ">
        <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
          <a href="managers.php">
            <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold"><?php
                  $select_data = mysqli_query($connection, "select * from accounts where role='2'");
                  $user = mysqli_num_rows($select_data);
                  echo "$user";
                  ?></p>
                    <h6 class="font-weight-bolder mb-0">
                     Managers
<!--                       <span class="text-success text-sm font-weight-bolder">+55%</span>
 -->                    </h6>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-single-02 text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
            </a>
          </div>
        </div>
        <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
          <a href="users.php">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold"><?php
                  $select_data = mysqli_query($connection, "select * from accounts where role='3'");
                  $user = mysqli_num_rows($select_data);
                  echo "$user";
                  ?></p>
                    <h6 class="font-weight-bolder mb-0">
                      Users
<!--                       <span class="text-success text-sm font-weight-bolder">+55%</span>
 -->                    </h6>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-single-02 text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </a>

  <br>
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <a href="projects.php">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold"> <?php
                  $select_data = mysqli_query($connection, "select * from projects");
                  $project = mysqli_num_rows($select_data);
                  echo "$project";
                  ?></p>
                    <h6 class="font-weight-bolder mb-0">
                      Projects
<!--                       <span class="text-success text-sm font-weight-bolder">+55%</span>
 -->                    </h6>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-spaceship text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <a href="doneprojects.php">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold"> <?php
                  $select_data = mysqli_query($connection, "SELECT * from projects where status='3'");
                  $project = mysqli_num_rows($select_data);
                  echo "$project";
                  ?></p>
                    <h6 class="font-weight-bolder mb-0">
                      Completed projects
<!--                       <span class="text-success text-sm font-weight-bolder">+3%</span>
 -->                    </h6>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-spaceship text-lg opacity-10" aria-hidden="true"></i>
                    <i class="ni ni-check-bold text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </a>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <a href="currentprojects.php">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold"><?php
                  $select_data = mysqli_query($connection, "SELECT * from projects where status='1' or   status='7'");
                  $project = mysqli_num_rows($select_data);
                  echo "$project";
                  ?></p>
                    <h6 class="font-weight-bolder mb-0">
                      project in progress
<!--                       <span class="text-danger text-sm font-weight-bolder">-2%</span>
 -->                    </h6>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-spaceship text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <div class="col-xl-3 col-sm-6">
          <a href="projectspending.php">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold"><?php
                  $select_data = mysqli_query($connection, "SELECT * from projects where status='0'");
                  $project = mysqli_num_rows($select_data);
                  echo "$project";
                  ?></h3></p>
                    <h6 class="font-weight-bolder mb-0">
                      Projects Pending
<!--                       <span class="text-success text-sm font-weight-bolder">+5%</span>
 -->                    </h6>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-spaceship text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </a>
      </div>

    <br>
      <div class="row">
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold"><?php
                  $total_money = 0;
                    $select_data = mysqli_query($connection, "SELECT * from projects ");
                    for ($sd = 0; $sd < mysqli_num_rows($select_data); $sd++) {
                      $rows = mysqli_fetch_array($select_data);
                      if($rows[3] == ""){
                        $rowamount=null;
                      }
                      else
                      {
                        $rowamount=$rows[3];
                      }
                      $total_money = $total_money + $rowamount;
                    }
                  echo "$total_money";
                  ?></p>
                    <h6 class="font-weight-bolder mb-0">
                      Total  Amount 
<!--                       <span class="text-success text-sm font-weight-bolder">+55%</span>
 -->                    </h6>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold"><?php
                  $total_earn_money = 0;
                  $select_order = mysqli_query($connection, "SELECT * from orders  where status='3' ");
                  $count = mysqli_num_rows($select_order);
                  for ($w = 0; $w < mysqli_num_rows($select_order); $w++) {
                    $row = mysqli_fetch_array($select_order);
                    $select_data = mysqli_query($connection, "SELECT * from projects where id='$row[1]' and status='3'");
                    for ($sd = 0; $sd < mysqli_num_rows($select_data); $sd++) {
                      $rows = mysqli_fetch_array($select_data);
                      $total_earn_money = $total_earn_money + $rows[3];
                    }
                  }
                  echo "$total_earn_money";
                  ?></p>
                    <h6 class="font-weight-bolder mb-0">
                      Amount to be paid 
<!--                       <span class="text-success text-sm font-weight-bolder">+3%</span>
 -->                    </h6>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold"> <?php
                  $total_withdra_amount = 0;
                  $select_data = mysqli_query($connection, "SELECT * from payment where   status='1'");
                  for ($sd = 0; $sd < mysqli_num_rows($select_data); $sd++) {
                    $rows = mysqli_fetch_array($select_data);
                    $total_withdra_amount = $total_withdra_amount + $rows[2];
                  }
                  echo "$total_withdra_amount";
                  ?></p>
                    <h6 class="font-weight-bolder mb-0">
                      paid amount 
<!--                       <span class="text-danger text-sm font-weight-bolder">-2%</span>
 -->                    </h6>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

        <br>
        <div class="row">
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold"><?php
                  $total_withdra_amount = $total_earn_money - $total_withdra_amount;
                  echo "$total_withdra_amount";
                  ?></p>
                    <h6 class="font-weight-bolder mb-0">
                       Remaining Amount 
<!--                       <span class="text-success text-sm font-weight-bolder">+55%</span>
 -->                    </h6>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-calendar-grid-58 text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <a href="paymentrequest.php">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold"><?php
                  $select_data = mysqli_query($connection, "select * from payment where status='0'");
                  $orders = mysqli_num_rows($select_data);
                  echo "$orders";
                  ?></p>
                    <h6 class="font-weight-bolder mb-0">
                      Withdraw Request
<!--                       <span class="text-success text-sm font-weight-bolder">+3%</span>
 -->                    </h6>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <a href="donerequests.php">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">
                      0
                    </p>
                    <h6 class="font-weight-bolder mb-0">
                      Done Requests
<!--                       <span class="text-danger text-sm font-weight-bolder">-2%</span>
 -->                    </h6>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </a>
          <br>
        </div>        
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