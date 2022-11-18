<?php
include("../connection.php");
if (isset($_POST['row_id'])) {
    $id = $_POST['row_id'];

    $select_data = mysqli_query($connection, "select * from orders where id='$id'");
    for ($e = 0; $e < mysqli_num_rows($select_data); $e++) {
        $data = mysqli_fetch_array($select_data);
 
        //check user already working
        $select_data_all = mysqli_query($connection, "select * from orders where project_id='$data[1]' and status='1' or status='4'");
        $count_all = mysqli_num_rows($select_data_all);
        //if working
        if ($count_all > 0) {
            //update status to already working
            mysqli_query($connection, "UPDATE orders set status='5' where id='$data[2]' and status='0'");
        } else {

            //accept the project
            //status 1 = acepted
            mysqli_query($connection, "UPDATE orders set status='1' where id='$id' ");
            //reject all requests of this project
            //status 2 = rejected 
            mysqli_query($connection, "UPDATE orders set status='2' where project_id='$data[1]' and status='0' ");
            //update project status to start working
            //status 1 = working
            mysqli_query($connection, "UPDATE projects set status='1' where id='$data[1]' ");

        }
    }
}
