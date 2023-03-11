<?php
// USER INFORMATION RETRIVED
    $user_id = $_SESSION['user_id']; // declare session
    $users_sql = "SELECT * FROM users WHERE user_id = '$user_id'";
    $users_query = mysqli_query($con,$users_sql);
    if(mysqli_num_rows($users_query) == 1){
        $users_rows = mysqli_fetch_assoc($users_query);
        $fname = $users_rows['fname'];
        $lname = $users_rows['lname'];
        $email = $users_rows['email'];
        $mobile = $users_rows['mobile'];
        $role = $users_rows['role'];
        $image = $users_rows['image_location'];
    }

//PRODUCT INFORMATION RETRIVED
    $product_sql = "SELECT * FROM product_info WHERE user_id = '$user_id'";
    $product_query = mysqli_query($con,$product_sql);
    if(mysqli_num_rows($product_query) > 0 ){
        $product_rows = mysqli_fetch_assoc($product_query);
        $tarh_arrival = $product_rows['tarh_arrival'];
        $tarh_depart = $product_rows['tarh_depart'];
        $product_qnty = $product_rows['product_qnty'];
        $product_type = $product_rows['product_type'];         
    }


if (isset($_POST['update'])) { 
    //data to be added infos
    $_fname = strtoupper($_POST ['fname']);
    $_lname = strtoupper($_POST['lname']);
    $_mobile = $_POST ['mobile'];
    $_email = $_POST['email'];
    $_product_qnty = $_POST['product_qnty'];
    $_product_type = $_POST['product_type'];
    $_tarh_arrival = $_POST['tarh_arrival'];
    $_tarh_depart = $_POST['tarh_depart'];
    $create_datetime = date("Y-m-d");

    // exxcuting data capture
        $user_sql = "UPDATE users SET fname = '$_fname', lname = '$_lname', mobile = '$_mobile', email = '$_email' WHERE user_id = '$user_id';";

        $update_sql .= "UPDATE product_info SET product_type = '$_product_type', product_qnty = '$_product_qnty',
            tarh_arrival = '$_tarh_arrival', tarh_depart = '$_tarh_depart', reg_time = '$create_datetime' WHERE user_id = '$user_id'";
             $product_query = mysqli_query($con, $product_sql);   
        
        $update_sql = "UPDATE my_activity SET product_type = '$_product_type', product_qnty = '$_product_qnty' WHERE user_id = '$user_id'";
        if(mysqli_multi_query($update_sql)){
            echo"<script> alert('Hongera, taarifa imefanikiwa Kutumwa')</script>";
        }
}

// MADAWA INFORMATION RETRIVED   
$med_sql = "SELECT * FROM med_activity WHERE  user_id = '$user_id'";
$med_query = mysqli_query($con,$med_sql);  

// MALISHO INFORMATION RETRIVED   
$activity_sql = "SELECT * FROM my_activity WHERE user_id = '$user_id' AND product_type = '$product_type'";
$activity_query = mysqli_query($con,$activity_sql);

  //MEDICAL INFORMATION RETRIB+VED
  $sup_sql = "SELECT * FROM medical_info";
  $sup_query = mysqli_query($con,$sup_sql);
  $sup_results = mysqli_num_rows($sup_query);
    
