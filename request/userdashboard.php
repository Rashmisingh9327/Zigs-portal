<section>
  <div class="container pt-1">
    <div class="row">



      <div class="col-xl-6 col-sm-6 col-12 mb-4 p-2">
        <a href="jobs.php">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div class="align-self-center img_wrapper_d">
                  <img src="assets/images/projects.png" class="mycustumicon" />
                </div>
                <div class="text-end">
                  <h3 class="count1">
                    <?php
                    $select_data = mysqli_query($connection, "SELECT * from projects where status='0' ");
                    $project = mysqli_num_rows($select_data);
                    echo "$project";
                    ?></h3>
                  <p class="mb-0">Total Projects</p>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>






      <div class="col-xl-6 col-sm-6 col-12 mb-4 p-2">
        <a href="previousprojects.php">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div class="align-self-center img_wrapper_d">
                  <img src="assets/images/project-done.png" class="mycustumicon" />
                </div>
                <div class="text-end">
                  <h3 class="count1">
                    <?php
                    $select_data = mysqli_query($connection, "SELECT * from orders where user_id='$user_id' and status='3' ");
                    $project = mysqli_num_rows($select_data);
                    echo "$project";
                    ?></h3>
                  <p class="mb-0">Completed Projects</p>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <?php
      $checkaccess = mysqli_query($connection, "SELECT * from accounts where user_id='$user_id' LIMIT 1");
      for ($ca = 0; $ca < mysqli_num_rows($checkaccess); $ca++) {
                        $rowsss = mysqli_fetch_array($checkaccess);
                        if($rowsss[14] == "on"){
                        ?>
      <div class="col-xl-4 col-sm-6 col-12 mb-4 p-2">
        <a href="#0">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div class="align-self-center img_wrapper_d">
                  <img src="assets/images/t-earn-amount.png" class="mycustumicon" />
                </div>
                <div class="text-end">
                  <h3 class="count1">
                    <?php
                    $total_earn_money = 0;
                    $select_order = mysqli_query($connection, "SELECT * from orders  where user_id='$user_id' and status='3' ");
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
                  <p class="mb-0">Earn Amount</p>
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
                  <img src="assets/images/withdraw-amount.png" class="mycustumicon" />
                </div>
                <div class="text-end">
                  <h3 class="count1">
                    <?php
                    $total_withdra_amount = 0;
                    $select_data = mysqli_query($connection, "SELECT * from payment where user_id='$user_id' and status='1'");
                    for ($sd = 0; $sd < mysqli_num_rows($select_data); $sd++) {
                      $rows = mysqli_fetch_array($select_data);
                      $total_withdra_amount = $total_withdra_amount + $rows[2];
                    }
                    echo "$total_withdra_amount";
                    ?>
                  </h3>
                  <p class="mb-0">Withdraw Amount</p>
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
                  <img src="assets/images/total-amount.png" class="mycustumicon" />
                </div>
                <div class="text-end">
                  <h3 class="count1">
                    <?php
                    $total_earn_money = 0;
                    $select_order = mysqli_query($connection, "SELECT * from orders  where user_id='$user_id' and status='3' ");
                    $count = mysqli_num_rows($select_order);
                    for ($w = 0; $w < mysqli_num_rows($select_order); $w++) {
                      $row = mysqli_fetch_array($select_order);
                      $select_data = mysqli_query($connection, "SELECT * from projects where id='$row[1]' and status='3'");
                      for ($sd = 0; $sd < mysqli_num_rows($select_data); $sd++) {
                        $rows = mysqli_fetch_array($select_data);
                        $total_earn_money = $total_earn_money + $rows[3];
                      }
                    }


                    $total_withdra_amount = 0;
                    $select_data = mysqli_query($connection, "SELECT * from payment where user_id='$user_id' and status='1'");
                    for ($sd = 0; $sd < mysqli_num_rows($select_data); $sd++) {
                      $rows = mysqli_fetch_array($select_data);
                      $total_withdra_amount = $total_withdra_amount + $rows[2];
                    }
                    $current_amount = 0;
                    $current_amount = $total_earn_money - $total_withdra_amount;
                    echo "$current_amount";

                    ?>
                  </h3>
                  <p class="mb-0">Current Amount</p>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>

 
<?php
                        }
                      }
                        ?>



    </div>


</section>