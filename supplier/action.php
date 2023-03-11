<?php
// USER INFORMATION RETRIVED
require_once('../connection.php');    session_start();

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
        $home_place = $users_rows['home_place'];
    }

// When form submitted, insert values into the database.
    if (isset($_POST['submit'])) {
        //declare the variables
        move_uploaded_file($_FILES["image"]["tmp_name"],"../uploads/bidhaa/" . $_FILES["image"]["name"]);            
                    $location = $_FILES["image"]["name"];
        $Pname = strtoupper($_POST ['P_name']);
        $Ptype = strtoupper($_POST['P_type']);
        $Pprice = $_POST ['P_price'];
        $Pqnty = $_POST ['P_qnty'];
        $content = $_POST['P_content'];
        $total = ($Pqnty * $Pprice);

        $Prod_sql = "INSERT INTO `prod_details`(`P_name`, `P_type`, `P_qnty`, `P_price`, `P_content`, `T_price`, `user_id`, `image_location`) 
                      VALUES ('$Pname','$Ptype','$Pqnty','$Pprice','$Pcontent','$total','$user_id', '$location')";
        $prod_query = mysqli_query($con,$Prod_sql);

        if ($prod_query > 0) {          
                echo"<script> alert('Umefanikiwa Kuongeza Bidhaa') </script>";  
        }                     
    }



//RETRIVE DATA
     $prod1_sql = "SELECT * FROM prod_details WHERE user_id = '$user_id'";
     $prod1_query = mysqli_query($con,$prod1_sql);