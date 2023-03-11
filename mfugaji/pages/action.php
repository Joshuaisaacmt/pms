<?php
         include "../connection.php";
        // USER INFORMATION RETRIVED
        $user_id = $_SESSION['user_id']; // declare session
        $user_sql = "SELECT * FROM users WHERE user_id = '$user_id'";
        $user_query = mysqli_query($con,$user_sql);
        if(mysqli_num_rows($user_query) == 1){
            $user_rows = mysqli_fetch_assoc($user_query);
            $fname = $user_rows['fname'];
            $lname = $user_rows['lname'];
            $email = $user_rows['email'];
            $mobile = $user_rows['mobile'];
            $role = $user_rows['role'];
            $image = $user_rows['image_location'];
        }

        // idadi ya Wafugaji
        $count1 = "SELECT COUNT(*) as role1  FROM users WHERE role='Mfugaji'";
        $count_query = mysqli_query($con,$count1);
        if(mysqli_num_rows($count_query)){
            $rows = mysqli_fetch_assoc($count_query);
            $user3 = $rows['role1'];
        }

        // idadi ya veterian
        $count2 = "SELECT COUNT(*) as role2  FROM users WHERE role='veterian'";
        $count2_query = mysqli_query($con,$count2);
        if(mysqli_num_rows($count2_query)){
            $rows3 = mysqli_fetch_assoc($count2_query);
            $user4 = $rows3['role2'];
        }

        // idadi ya wataalam
        $count3 = "SELECT COUNT(*) as role4  FROM users WHERE role='Admin'";
        $count3_query = mysqli_query($con,$count3);
        if(mysqli_num_rows($count3_query)){
            $rows4 = mysqli_fetch_assoc($count3_query);
            $user5 = $rows4['role4'];
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

        if (isset($_POST['receiver'])){
            $receiver = $_POST['receiver'];
            $sender = $fname;
            $sms_content = $_POST['sms_content'];
            $sms_subject = $_POST['sms_subject'];

            if (empty($receiver)) {
                echo"<script> alert('Hongera, taarifa imefanikiwa Kutumwa')</script>";
            } elseif (empty($receiver)) {
                echo"<script> alert('Nafasi ya Mtaalam iko wazi')</script>";
            } elseif (empty($sms_content)) {
                echo"<script> alert('Nafasi ya Maelezo yako wazi')</script>";
            }elseif (empty($sms_subject)) {
                echo"<script> alert('Nafasi ya Somo iko wazi')</script>";
            }else{
                echo"<script> alert('Hongera, taarifa imefanikiwa Kutumwa')</script>";
            }
        }

        



        