<?php
    require_once('../connection.php');
// USER INFORMATION RETRIVED
    $user_id = $_SESSION['user_id']; // declare session
    $product_sql = "SELECT * FROM users WHERE user_id = '$user_id'";
    $product_query = mysqli_query($con,$product_sql);
    if(mysqli_num_rows($product_query) == 1){
        $product_rows = mysqli_fetch_assoc($product_query);
        $fname = $product_rows['fname'];
        $lname = $product_rows['lname'];
        $email = $product_rows['email'];
        $mobile = $product_rows['mobile'];
        $role = $product_rows['role'];
        $image = $product_rows['image_location'];
        $home_place = $product_rows['home_place'];
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

    
    //MEDICAL INFORMATION RETRIB+VED
    $sup_sql = "SELECT * FROM medical_info";
    $sup_query = mysqli_query($con,$sup_sql);
    $sup_results = mysqli_num_rows($sup_query);

