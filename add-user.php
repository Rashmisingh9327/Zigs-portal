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
    <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet"/>
    <style type="text/css">
      form{
        overflow-x:hidden ;
      }
    </style>
  </head>
  <body class="g-sidenav-show bg-gray-100" style="overflow-x: hidden;">
    <?php
    include 'sidenavbar.php';
    ?>
    <!-- main content start from hear -->
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
      <!-- navbar start from hear -->
      <?php  include 'navbar.php';?>
      <!-- End Navbar -->
      <form class="container-fluid" >
        <br>
        <br>
        <section class="bg-white p-4">
        <h1 class="text-center">Add a User</h1>
        <br>
        <div class="row">
          <div class="col-md-2">
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Manager Name: </label>
              <div class="input-group mb-4">
                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                <input class="form-control" placeholder="Full Name" type="text">
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Manager username: </label>
              <div class="input-group mb-4">
                <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                <input class="form-control" placeholder="Username" type="text">
              </div>
            </div>
          </div>
          <div class="col-md-2">
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Phone: </label>
              <div class="input-group mb-4">
                <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                <input class="form-control" placeholder="Phone Number" type="text">
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Email: </label>
              <div class="input-group mb-4">
                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                <input class="form-control" placeholder="Email" type="text">
              </div>
            </div>
          </div>
          <div class="col-md-2">
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Password: </label>
              <div class="input-group mb-4">
                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                <input class="form-control" placeholder="Password" type="text">
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Confirm Password: </label>
              <div class="input-group mb-4">
                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                <input class="form-control" placeholder="Confirm Password" type="text">
              </div>                        
            </div>
          </div>
          <div class="col-md-2">
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Working Hours: </label>
              <div class="input-group mb-4">
                <span class="input-group-text"><i class="ni ni-time-alarm"></i></span>
                <input class="form-control" placeholder="Password" type="text">
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Country: </label>
              <div class="input-group mb-4">
                <span class="input-group-text"><i class="ni ni-world-2"></i></span>
                <select class="form-control selectpicker countrypicker">
                     <option>Afghanistan</option><option>Åland Islands</option><option>Albania</option><option>Algeria</option><option>American Samoa</option><option>AndorrA</option><option>Angola</option><option>Anguilla</option><option>Antarctica</option><option>Antigua and Barbuda</option><option>Argentina</option><option>Armenia</option><option>Aruba</option><option>Australia</option><option>Austria</option><option>Azerbaijan</option><option>Bahamas</option><option>Bahrain</option><option>Bangladesh</option><option>Barbados</option><option>Belarus</option><option>Belgium</option><option>Belize</option><option>Benin</option><option>Bermuda</option><option>Bhutan</option><option>Bolivia</option><option>Bosnia and Herzegovina</option><option>Botswana</option><option>Bouvet Island</option><option>Brazil</option><option>British Indian Ocean Territory</option><option>Brunei Darussalam</option><option>Bulgaria</option><option>Burkina Faso</option><option>Burundi</option><option>Cambodia</option><option>Cameroon</option><option>Canada</option><option>Cape Verde</option><option>Cayman Islands</option><option>Central African Republic</option><option>Chad</option><option>Chile</option><option>China</option><option>Christmas Island</option><option>Cocos (Keeling) Islands</option><option>Colombia</option><option>Comoros</option><option>Congo</option><option>Congo, The Democratic Republic of the</option><option>Cook Islands</option><option>Costa Rica</option><option>Cote D'Ivoire</option><option>Croatia</option><option>Cuba</option><option>Cyprus</option><option>Czech Republic</option><option>Denmark</option><option>Djibouti</option><option>Dominica</option><option>Dominican Republic</option><option>Ecuador</option><option>Egypt</option><option>El Salvador</option><option>Equatorial Guinea</option><option>Eritrea</option><option>Estonia</option><option>Ethiopia</option><option>Falkland Islands (Malvinas)</option><option>Faroe Islands</option><option>Fiji</option><option>Finland</option><option>France</option><option>French Guiana</option><option>French Polynesia</option><option>French Southern Territories</option><option>Gabon</option><option>Gambia</option><option>Georgia</option><option>Germany</option><option>Ghana</option><option>Gibraltar</option><option>Greece</option><option>Greenland</option><option>Grenada</option><option>Guadeloupe</option><option>Guam</option><option>Guatemala</option><option>Guernsey</option><option>Guinea</option><option>Guinea-Bissau</option><option>Guyana</option><option>Haiti</option><option>Heard Island and Mcdonald Islands</option><option>Holy See (Vatican City State)</option><option>Honduras</option><option>Hong Kong</option><option>Hungary</option><option>Iceland</option><option>India</option><option>Indonesia</option><option>Iran, Islamic Republic Of</option><option>Iraq</option><option>Ireland</option><option>Isle of Man</option><option>Israel</option><option>Italy</option><option>Jamaica</option><option>Japan</option><option>Jersey</option><option>Jordan</option><option>Kazakhstan</option><option>Kenya</option><option>Kiribati</option><option>Korea, Democratic People'S Republic of</option><option>Korea, Republic of</option><option>Kuwait</option><option>Kyrgyzstan</option><option>Lao People'S Democratic Republic</option><option>Latvia</option><option>Lebanon</option><option>Lesotho</option><option>Liberia</option><option>Libyan Arab Jamahiriya</option><option>Liechtenstein</option><option>Lithuania</option><option>Luxembourg</option><option>Macao</option><option>Macedonia, The Former Yugoslav Republic of</option><option>Madagascar</option><option>Malawi</option><option>Malaysia</option><option>Maldives</option><option>Mali</option><option>Malta</option><option>Marshall Islands</option><option>Martinique</option><option>Mauritania</option><option>Mauritius</option><option>Mayotte</option><option>Mexico</option><option>Micronesia, Federated States of</option><option>Moldova, Republic of</option><option>Monaco</option><option>Mongolia</option><option>Montserrat</option><option>Morocco</option><option>Mozambique</option><option>Myanmar</option><option>Namibia</option><option>Nauru</option><option>Nepal</option><option>Netherlands</option><option>Netherlands Antilles</option><option>New Caledonia</option><option>New Zealand</option><option>Nicaragua</option><option>Niger</option><option>Nigeria</option><option>Niue</option><option>Norfolk Island</option><option>Northern Mariana Islands</option><option>Norway</option><option>Oman</option><option>Pakistan</option><option>Palau</option><option>Palestinian Territory, Occupied</option><option>Panama</option><option>Papua New Guinea</option><option>Paraguay</option><option>Peru</option><option>Philippines</option><option>Pitcairn</option><option>Poland</option><option>Portugal</option><option>Puerto Rico</option><option>Qatar</option><option>Reunion</option><option>Romania</option><option>Russian Federation</option><option>RWANDA</option><option>Saint Helena</option><option>Saint Kitts and Nevis</option><option>Saint Lucia</option><option>Saint Pierre and Miquelon</option><option>Saint Vincent and the Grenadines</option><option>Samoa</option><option>San Marino</option><option>Sao Tome and Principe</option><option>Saudi Arabia</option><option>Senegal</option><option>Serbia and Montenegro</option><option>Seychelles</option><option>Sierra Leone</option><option>Singapore</option><option>Slovakia</option><option>Slovenia</option><option>Solomon Islands</option><option>Somalia</option><option>South Africa</option><option>South Georgia and the South Sandwich Islands</option><option>Spain</option><option>Sri Lanka</option><option>Sudan</option><option>Suriname</option><option>Svalbard and Jan Mayen</option><option>Swaziland</option><option>Sweden</option><option>Switzerland</option><option>Syrian Arab Republic</option><option>Taiwan, Province of China</option><option>Tajikistan</option><option>Tanzania, United Republic of</option><option>Thailand</option><option>Timor-Leste</option><option>Togo</option><option>Tokelau</option><option>Tonga</option><option>Trinidad and Tobago</option><option>Tunisia</option><option>Turkey</option><option>Turkmenistan</option><option>Turks and Caicos Islands</option><option>Tuvalu</option><option>Uganda</option><option>Ukraine</option><option>United Arab Emirates</option><option>United Kingdom</option><option>United States</option><option>United States Minor Outlying Islands</option><option>Uruguay</option><option>Uzbekistan</option><option>Vanuatu</option><option>Venezuela</option><option>Viet Nam</option><option>Virgin Islands, British</option><option>Virgin Islands, U.S.</option><option>Wallis and Futuna</option><option>Western Sahara</option><option>Yemen</option><option>Zambia</option><option>Zimbabwe</option>
                </select>
                <span class="input-group-text"><i class="ni ni-bold-up"></i></span>
              </div>
            </div>

          </div>
          <div class="col-md-2">
          </div>


        <div class="row">
          <div class="col-md-2">
          </div>
          <div class="col-md-8">
            <div class="form-group">
              <label>Portfolio Link: </label>
              <div class="input-group mb-4">
                <span class="input-group-text"><i class="ni ni-ui-04"></i></span>
                <input class="form-control" placeholder="https://example.com/Portfolio/" type="text">
              </div>
            </div>
          </div>
          <div class="col-md-2">
          </div>
        </div>
        <div class="form-check" style="margin-left: 210px;">
          <input class="form-check-input" type="checkbox" value="" id="fcustomCheck1" checked="">
          <label class="custom-control-label" for="customCheck1">Is Amount Show</label>
        </div>
      </div>
        <br>
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