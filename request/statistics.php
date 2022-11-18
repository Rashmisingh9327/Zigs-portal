<?php
include("../connection.php");



$user_id_ss=mysqli_real_escape_string($connection,$_POST['userid']);

$checkrecord=mysqli_query($connection,"select * from accounts where user_name='$user_id_ss' and role != '1'  or user_id='$user_id_ss'  and role != '1' LIMIT 1 ");
$count_cr=mysqli_num_rows($checkrecord);
if($count_cr > 0){
for($cr=0;$cr<mysqli_num_rows($checkrecord);$cr++){
$rowcr=mysqli_fetch_array($checkrecord);
$user_id_s = $rowcr[0];
$check_auth=$rowcr[13];
if($check_auth == 3){
?>
<section>
          <div class="container pt-1">
            <div class="row">
         

              <div class="col-xl-3 col-sm-6 col-12 mb-4 p-2">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between px-md-1">
                      <div class="align-self-center">
                        <i class="fas fa-rocket text-success fa-3x"></i>
                      </div>
                      <div class="text-end">
                        <h3>
<?php
$select_data=mysqli_query($connection,"SELECT * from orders where user_id='$user_id_s' and status='3' ");
    $project=mysqli_num_rows($select_data);
    echo"$project";
?></h3>
                        <p class="mb-0">Completed Projects</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            


              <div class="col-xl-3 col-sm-6 col-12 mb-4 p-2">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between px-md-1">
                      <div class="align-self-center">
                        <i class="fas fa-rocket text-success fa-3x"></i>
                      </div>
                      <div class="text-end">
                        <h3>
<?php
$total_earn_money=0;
$select_order=mysqli_query($connection,"SELECT * from orders  where user_id='$user_id_s' and status='3' ");
$count=mysqli_num_rows($select_order);
for($w=0;$w<mysqli_num_rows($select_order);$w++)
{
    $row=mysqli_fetch_array($select_order);
$select_data=mysqli_query($connection,"SELECT * from projects where id='$row[1]' and status='3'");
for($sd=0;$sd<mysqli_num_rows($select_data);$sd++)
{
    $rows=mysqli_fetch_array($select_data);
    $total_earn_money = $total_earn_money + $rows[3];
}
}
    echo"$total_earn_money";
?></h3>
                        <p class="mb-0">Earn Amount</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-xl-3 col-sm-6 col-12 mb-4 p-2">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between px-md-1">
                      <div class="align-self-center">
                        <i class="fas fa-users text-success fa-3x"></i>
                      </div>
                      <div class="text-end">
                        <h3>
<?php
$total_withdra_amount=0;
$select_data=mysqli_query($connection,"SELECT * from payment where user_id='$user_id_s' and status='1'");
for($sd=0;$sd<mysqli_num_rows($select_data);$sd++)
{
    $rows=mysqli_fetch_array($select_data);
    $total_withdra_amount = $total_withdra_amount + $rows[2];
}
    echo"$total_withdra_amount";
?>
</h3>
                        <p class="mb-0">Withdraw Amount</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             
              <div class="col-xl-3 col-sm-6 col-12 mb-4 p-2">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between px-md-1">
                      <div class="align-self-center">
                        <i class="fas fa-rocket text-success fa-3x"></i>
                      </div>
                      <div class="text-end">
                        <h3>
<?php
$total_earn_money=0;
$select_order=mysqli_query($connection,"SELECT * from orders  where user_id='$user_id_s' and status='3' ");
$count=mysqli_num_rows($select_order);
for($w=0;$w<mysqli_num_rows($select_order);$w++)
{
    $row=mysqli_fetch_array($select_order);
$select_data=mysqli_query($connection,"SELECT * from projects where id='$row[1]' and status='3'");
for($sd=0;$sd<mysqli_num_rows($select_data);$sd++)
{
    $rows=mysqli_fetch_array($select_data);
    $total_earn_money = $total_earn_money + $rows[3];
}
}


$total_withdra_amount=0;
$select_data=mysqli_query($connection,"SELECT * from payment where user_id='$user_id_s' and status='1'");
for($sd=0;$sd<mysqli_num_rows($select_data);$sd++)
{
    $rows=mysqli_fetch_array($select_data);
    $total_withdra_amount = $total_withdra_amount + $rows[2];
}
$current_amount=0;
  $current_amount=$total_earn_money - $total_withdra_amount;
echo"$current_amount";

?>
</h3>
                        <p class="mb-0">Current Amount</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
           
          
              
         

            </div>
          
           
            <ul class="nav nav-tabs">
          
    <li class="nav-item">
      <a class="nav-link " data-toggle="tab" href="#home">Current Projects</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Completed Projects</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Withdraw Data</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
  <div id="home" class="container tab-pane active"><br>
  <table id="myordertable" class="table table-striped table-bordered" style="width: 100%">
          <thead>
            <tr>
              <th>Project Name</th>
              <th>Posted By</th>  
                <th>Posted Date</th>
              <th>Amount</th>
             
            </tr>
          </thead>
          <tbody>





            <?php
            $select_data = mysqli_query($connection, "SELECT * from orders WHERE   user_id='$user_id_s' and status='1' or status='4'   and user_id='$user_id_s' ");
            for ($e = 0; $e < mysqli_num_rows($select_data); $e++) {
              $data = mysqli_fetch_array($select_data);
              echo "
              <tr id='delete$data[0]'>
                <td>
                ";
              $select_project = mysqli_query($connection, "select * from projects where id='$data[1]'");
              for ($i = 0; $i < mysqli_num_rows($select_project); $i++) {
                $p_data = mysqli_fetch_array($select_project);
                echo "$p_data[1]";
                $amount = $p_data[3];
                $deadline = $p_data[2];
                $posted_by = $p_data[7];
                $project_id=$p_data[0];
                $posted_date=$p_data[5];
              }
              echo "
                 </td>
                <td>
                ";
              $select_account = mysqli_query($connection, "select * from accounts where user_id='$posted_by'");
              for ($o = 0; $o < mysqli_num_rows($select_account); $o++) {
                $a_data = mysqli_fetch_array($select_account);
                if ($a_data[13] == 1) {
                  echo "Admin";
                } else if ($a_data[13] == 2) {
                  echo "$a_data[1]";
                }
              }
              echo "
                </td>
                <td>$posted_date</td>
                <td>$amount</td>
                   </tr>
         ";
            }
            ?>




            </tfoot>
        </table>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
    <table id="myordertable" class="table table-striped table-bordered" style="width: 100%">
          <thead>
            <tr>
              <th>Project Name</th>
              <th>Posted By</th>
              <th>Amount</th>
              <th>Completed Date</th>
            </tr>
          </thead>
          <tbody>





            <?php
            $select_data = mysqli_query($connection, "SELECT * from orders WHERE status='3'  and user_id='$user_id_s'");
            for ($e = 0; $e < mysqli_num_rows($select_data); $e++) {
              $data = mysqli_fetch_array($select_data);
              echo "
              <tr id='delete$data[0]'>
                <td>
                ";
              $select_project = mysqli_query($connection, "select * from projects where id='$data[1]'");
              for ($i = 0; $i < mysqli_num_rows($select_project); $i++) {
                $p_data = mysqli_fetch_array($select_project);
                echo "$p_data[1]";
                $amount = $p_data[3];
                $deadline = $p_data[2];
                $posted_by = $p_data[7];
                $project_id=$p_data[0];
              }
              echo "
                 </td>
                <td>
                ";
              $select_account = mysqli_query($connection, "select * from accounts where user_id='$posted_by'");
              for ($o = 0; $o < mysqli_num_rows($select_account); $o++) {
                $a_data = mysqli_fetch_array($select_account);
                if ($a_data[13] == 1) {
                  echo "Admin";
                } else if ($a_data[13] == 2) {
                  echo "$a_data[1]";
                }
              }
              echo "
                </td>
                <td>$amount</td>   
                <td>$data[6]</td>
                 </tr>
         ";
            }
            ?>




            </tfoot>
        </table> 

    </div>
    <div id="menu2" class="container tab-pane fade"><br>
     
    <table id="myordertable" class="table table-striped table-bordered" style="width: 100%">
          <thead>
            <tr>
              <th>Amount</th>
              <th>Time</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>





            <?php
            $select_data = mysqli_query($connection, "SELECT * from payment WHERE status='1'  and user_id='$user_id_s'");
            for ($e = 0; $e < mysqli_num_rows($select_data); $e++) {
              $data = mysqli_fetch_array($select_data);
              echo "
              <tr>
                <td>$data[2]</td>
                <td>$data[4]</td>
                <td>$data[5]</td>     
              </tr>
         ";
            }
            ?>




            </tfoot>
        </table> 

    </div>
  </div>

        </section>
   <?php
    }
    else
    {
?>

<section>
  <div class="container pt-1">
    <div class="row">


      <div class="col-xl-3 col-sm-6 col-12 mb-4 p-2">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="fas fa-rocket text-success fa-3x"></i>
              </div>
              <div class="text-end">
                <h3>
                  <?php
                  $select_data = mysqli_query($connection, "SELECT * from projects where post_by='$user_id_s'");
                  $project = mysqli_num_rows($select_data);
                  echo "$project";
                  ?>
                </h3>
                <p class="mb-0">Projects</p>
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="col-xl-3 col-sm-6 col-12 mb-4 p-2">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="fas fa-rocket text-success fa-3x"></i>
              </div>
              <div class="text-end">
                <h3>
                  <?php
                  $select_data = mysqli_query($connection, "SELECT * from projects where status='3' and post_by='$user_id_s'");
                  $project = mysqli_num_rows($select_data);
                  echo "$project";
                  ?></h3>
                <p class="mb-0">Projects Done</p>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="col-xl-3 col-sm-6 col-12 mb-4 p-2">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="fas fa-rocket text-success fa-3x"></i>
              </div>
              <div class="text-end">
                <h3>
                  <?php

                  $select_data = mysqli_query($connection, "SELECT * from orders WHERE status='4' and project_id IN (select id from projects where post_by='$user_id_s')");
                  $count_req = mysqli_num_rows($select_data);
                  echo "$count_req";
                  ?></h3>
                <p class="mb-0">Done Requests</p>
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="col-xl-3 col-sm-6 col-12 mb-4 p-2">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="fas fa-rocket text-success fa-3x"></i>
              </div>
              <div class="text-end">
                <h3>
                  <?php
                  $select_data = mysqli_query($connection, "SELECT * from projects where status='1'   and post_by='$user_id_s'");
                  $project = mysqli_num_rows($select_data);
                  echo "$project";
                  ?></h3>
                <p class="mb-0"> working Projects</p>
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="col-xl-3 col-sm-6 col-12 mb-4 p-2">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="fas fa-rocket text-success fa-3x"></i>
              </div>
              <div class="text-end">
                <h3>
                  <?php
                  $select_data = mysqli_query($connection, "SELECT * from projects where status='0'  and post_by='$user_id_s'");
                  $project = mysqli_num_rows($select_data);
                  echo "$project";
                  ?></h3>
                <p class="mb-0">Projects Pending</p>
              </div>
            </div>
          </div>
        </div>
      </div>



    </div>


</section>


<?php
    }
}
}else
{
    echo"<br><br> <div class='error_no'> Account Didn't Found </div>";
}
        ?>
        <script>
$('table').DataTable();
          </script>