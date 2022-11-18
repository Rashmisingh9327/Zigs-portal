<section>
  <div class="container pt-1">
    <div class="row">
      <div class="col-xl-6 col-sm-6 col-12 mb-4 p-2">
        <a href="managers.php">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="fas fa-user-tie text-success fa-3x"></i>
              </div>
              <div class="text-end">
                <h3 class="count1">
                  <?php
                  $select_data = mysqli_query($connection, "select * from accounts where role='2'");
                  $user = mysqli_num_rows($select_data);
                  echo "$user";
                  ?></h3>
                <p class="mb-0">Managers</p>
              </div>
            </div>
          </div>
        </div>
</a>
      </div>
      <div class="col-xl-6 col-sm-6 col-12 mb-4 p-2"> 
         <a href="users.php">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="fas fa-users text-success fa-3x"></i>
              </div>
              <div class="text-end">
                <h3 class="count1">
                  <?php
                  $select_data = mysqli_query($connection, "select * from accounts where role='3'");
                  $user = mysqli_num_rows($select_data);
                  echo "$user";
                  ?></h3>
                <p class="mb-0">Users</p>
              </div>
            </div>
          </div>
        </div>
         </a>
      </div>

      <div class="col-xl-3 col-sm-6 col-12 mb-4 p-2">
        <a href="projects.php">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center img_wrapper_d">
              <img src="assets/images/projects.png" class="mycustumicon"/>
              </div>
              <div class="text-end">
                <h3 class="count1">
                  <?php
                  $select_data = mysqli_query($connection, "select * from projects");
                  $project = mysqli_num_rows($select_data);
                  echo "$project";
                  ?></h3>
                <p class="mb-0">Projects</p>
              </div>
            </div>
          </div>
        </div>
</a>
      </div>



      <div class="col-xl-3 col-sm-6 col-12 mb-4 p-2">
        <a href="doneprojects.php">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
            <div class="align-self-center img_wrapper_d">
              <img src="assets/images/project-done.png" class="mycustumicon"/>
              </div>
              <div class="text-end">
                <h3 class="count1">
                  <?php
                  $select_data = mysqli_query($connection, "SELECT * from projects where status='3'");
                  $project = mysqli_num_rows($select_data);
                  echo "$project";
                  ?></h3>
                <p class="mb-0">Completed projects</p>
              </div>
            </div>
          </div>
        </div>
</a>
      </div>



      <div class="col-xl-3 col-sm-6 col-12 mb-4 p-2">
        <a href="currentprojects.php">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
            <div class="align-self-center img_wrapper_d">
              <img src="assets/images/working-project.png" class="mycustumicon"/>
              </div>
              <div class="text-end">
                <h3 class="count1">
                  <?php
                  $select_data = mysqli_query($connection, "SELECT * from projects where status='1' or   status='7'");
                  $project = mysqli_num_rows($select_data);
                  echo "$project";
                  ?></h3>
                <p class="mb-0">project in progress</p>
              </div>
            </div>
          </div>
        </div>
</a>
      </div>

 
      <div class="col-xl-3 col-sm-6 col-12 mb-4 p-2">
        <a href="projectspending.php">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
            <div class="align-self-center img_wrapper_d">
              <img src="assets/images/project-pending.png" class="mycustumicon"/>
              </div>
              <div class="text-end">
                <h3 class="count1">
                  <?php
                  $select_data = mysqli_query($connection, "SELECT * from projects where status='0'");
                  $project = mysqli_num_rows($select_data);
                  echo "$project";
                  ?></h3>
                <p class="mb-0">Projects Pending</p>
              </div>
            </div>
          </div>
        </div>
        </a>
      </div>




      

      <div class="col-xl-4 col-sm-6 col-12 mb-4 p-2"> 
         <a href="#0">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
            <div class="align-self-center img_wrapper_d">
              <img src="assets/images/total-amount.png" class="mycustumicon"/>
              </div>
              <div class="text-end">
                <h3 class="count1">
                  <?php
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
                  ?></h3>
                <p class="mb-0">Total  Amount </p>
              </div>

            </div>
          </div>
        </div>
         </a>
      </div>





      <div class="col-xl-4 col-sm-6 col-12 mb-4 p-2"> 
         <a href="#0">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
            <div class="align-self-center img_wrapper_d">
              <img src="assets/images/t-earn-amount.png" class="mycustumicon"/>
              </div>
              <div class="text-end">
                <h3 class="count1">
                  <?php
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
                  ?></h3>
                <p class="mb-0">Amount to be paid </p>
              </div>

            </div>
          </div>
        </div>
         </a>
      </div>



      <div class="col-xl-4 col-sm-6 col-12 mb-4 p-2"> 
         <a href="#0">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
            <div class="align-self-center img_wrapper_d">
              <img src="assets/images/withdraw-amount.png" class="mycustumicon"/>
              </div>
              <div class="text-end">
                <h3 class="count1">
                  <?php
                  $total_withdra_amount = 0;
                  $select_data = mysqli_query($connection, "SELECT * from payment where   status='1'");
                  for ($sd = 0; $sd < mysqli_num_rows($select_data); $sd++) {
                    $rows = mysqli_fetch_array($select_data);
                    $total_withdra_amount = $total_withdra_amount + $rows[2];
                  }
                  echo "$total_withdra_amount";
                  ?></h3>
                <p class="mb-0">paid amount </p>
              </div>

            </div>
          </div>
        </div>
         </a>
      </div>



      <div class="col-xl-4 col-sm-6 col-12 mb-4 p-2">  
         <a href="#0">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
            <div class="align-self-center img_wrapper_d">
              <img src="assets/images/remaining-amount.png" class="mycustumicon"/>
              </div>
              <div class="text-end">
                <h3 class="count1">
                  <?php
                  $total_withdra_amount = $total_earn_money - $total_withdra_amount;
                  echo "$total_withdra_amount";
                  ?></h3>
                <p class="mb-0"> Remaining Amount </p>
              </div>

            </div>
          </div>
        </div>
                </a>
      </div>




      <div class="col-xl-4 col-sm-6 col-12 mb-4 p-2">
        <a href="paymentrequest.php">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
            <div class="align-self-center img_wrapper_d">
              <img src="assets/images/payment-request.png" class="mycustumicon"/>
              </div>
              <div class="text-end">
                <h3 class="count1">
                  <?php
                  $select_data = mysqli_query($connection, "select * from payment where status='0'");
                  $orders = mysqli_num_rows($select_data);
                  echo "$orders";
                  ?></h3>
                <p class="mb-0">Withdraw Request</p>
              </div>
            </div>
          </div>
        </div>
</a>
      </div>






      <div class="col-xl-4 col-sm-6 col-12 mb-4 p-2">
         <a href="donerequests.php">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
            <div class="align-self-center img_wrapper_d">
              <img src="assets/images/project-request.png" class="mycustumicon"/>
              </div>
              <div class="text-end">
                <h3 class="count1">
                  <?php

                  $select_data = mysqli_query($connection, "SELECT * from orders WHERE status='4' and project_id IN (select id from projects where post_by='$user_id') ");
                  $count_req = mysqli_num_rows($select_data);
                  echo "$count_req";
                  ?></h3>
                <p class="mb-0">Done Requests</p>
              </div>
            </div>
          </div>
        </div>
         </a>
      </div>


   








    </div>


</section>