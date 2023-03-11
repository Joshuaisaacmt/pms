<?php
        $sms_on = "true";
        if($sms_on == $_SESSION["message"]){
            $current_date = date("Y-m-d");
            $_SESSION['message'] = "false";
            $date_now = date("Y-m-d H:i:s");
            $user_id = $_SESSION['user_id'];
            $fname = $_SESSION['uname']; // declare session
            $sender = "System";
            $actvty_sql = "SELECT * FROM my_activity WHERE user_id = '$user_id'";
            $actvty_query = mysqli_query($con,$actvty_sql);
                if(mysqli_num_rows($actvty_query)>0){
                    $actvty_rows = mysqli_fetch_assoc($actvty_query);
                    if($current_date == $actvty_rows['schedule_activity']){
                        $product_type = $actvty_rows['product_type'];
                        $food_subject = $actvty_rows['food_subject'];
                        $food_details = $actvty_rows['food_details'];
                        $data_actvty = $actvty_rows['food_subject'];
                        $water_activity = $actvty_rows['water_activity'];
                        $food_qnty = $actvty_rows['food_qnty'];
                            echo"<script> alert('Muda wa Chakula')</script>";
                            $txt_now =" Muda wa Kuwapa Chakula aina <b>".$food_subject."</b><br>
                                    <b> Kiwango cha Maji : </b> ".$water_activity." lita kwa siku nzima <br>
                                    <b> Kiwango cha Chakula: </b> ".$food_qnty." kilo kwa siku nzima <br>    
                                    <b> Maelezo ya Chakula <br></b> ".$food_details."<br>";

                            $actvty_update = "INSERT INTO message (sender , receiver , sms_subject , sms_content , sms_time_sent) 
                                            VALUES ('$sender','$fname','$food_subject','$txt_now','$date_now')";
                            $actvty_update_query = mysqli_query($con,$actvty_update);                          
                    }
                    
                    $med_sql = "SELECT * FROM med_activity WHERE product_type = '$product_type'";
                    $med_query = mysqli_query($con,$med_sql);
                    if(mysqli_num_rows($med_query)>0){
                        $med_rows = mysqli_fetch_assoc($med_query);
                        $product_type = $med_rows['product_type'];
                        $med_status = $med_rows['med_status'];
                        $med_purpose = $med_rows['med_purpose'];
                        $med_treat = $med_rows['med_treat'];
                        if($current_date == $med_rows['med_time']){
                            echo"<script> alert('Muda wa Kuwapa Dawa')</script>";
                        $txt_sms =  " Muda wa Kuwapa <b>".$med_status."</b><br>"
                                    .$med_purpose."<br><br>".$med_treat ;
        
                        $med_update = "INSERT INTO message (sender , receiver , sms_subject , sms_content , sms_time_sent) 
                                        VALUES ('$sender','$fname','$med_status','$txt_sms','$date_now')";
                        $med_update_query = mysqli_query($con,$med_update); 
                        }
                    }
                }
        }

            
            
             