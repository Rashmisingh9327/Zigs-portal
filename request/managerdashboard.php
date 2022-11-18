<section>
  <div class="container pt-1">
    <div class="row">


      <div class="col-xl-3 col-sm-6 col-12 mb-4 p-2">
         <a href="totalprojects.php">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
            <div class="align-self-center img_wrapper_d">
              <img src="assets/images/projects.png" class="mycustumicon"/>
              </div>
              <div class="text-end">
                <h3 class="count1">
                  <?php
                   $select_data = mysqli_query($connection, "select * from projects where post_by ='$user_id'");
                  $project = mysqli_num_rows($select_data);
                  echo "$project";
                  ?>
                </h3>
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
                  $select_data = mysqli_query($connection, "SELECT * from projects where status='3' and post_by='$user_id'");
                  $project = mysqli_num_rows($select_data);
                  echo "$project";
                  ?></h3>
                <p class="mb-0">Projects Done</p>
              </div>
            </div>
          </div>
        </div>
         </a>
      </div>





      <div class="col-xl-3 col-sm-6 col-12 mb-4 p-2">
         <a href="currentprojectm.php">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
            <div class="align-self-center img_wrapper_d">
              <img src="assets/images/working-project.png" class="mycustumicon"/>
              </div>
              <div class="text-end">
                <h3 class="count1">
                  <?php
                  $select_data = mysqli_query($connection, "SELECT * from projects where status='1'  and post_by='$user_id'");
                  $project = mysqli_num_rows($select_data);
                  echo "$project";
                  ?></h3>
                <p class="mb-0"> working Projects</p>
              </div>
            </div>
          </div>
        </div>
         </a>
      </div>



      <div class="col-xl-3 col-sm-6 col-12 mb-4 p-2">
         <a href="pendingprojects.php">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
            <div class="align-self-center img_wrapper_d">
              <img src="assets/images/project-pending.png" class="mycustumicon"/>
              </div>
              <div class="text-end">
                <h3 class="count1">
                  <?php
                  $select_data = mysqli_query($connection, "SELECT * from projects where status='0' and   post_by ='$user_id'");
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




      <div class="col-xl-3 col-sm-6 col-12 mb-4 p-2">
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