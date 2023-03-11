<?php
     require_once('../connection.php'); session_start();
     $user_id = $_SESSION['user_id']; // declare session
    // upload medical information
   if (isset($_POST['submit'])) {
        $med_status = strtoupper($_POST ['med_status']);
        $med_type = strtoupper($_POST['med_type']);
        $med_details = $_POST ['med_details'];
        $med_dalili = $_POST['med_dalili'];
        $med_treat = $_POST['med_treat'];
        $product_type = $_POST['product_type'];
        $target_dir = "../uploads/med_pic/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Allow certain file formats
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                    echo"<script> alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>"; 
                    $uploadOk = 0;
                }
                
        // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    echo"<script> alert('Picha Haijatumwa ')</script>"; 
        // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
                    } else {
                    echo "Sorry, there was an error uploading your file.";
                    }     
                        
            $med_sql = "INSERT INTO medical_info ( med_type,  med_dalili , med_purpose , med_treat , product_type , med_status , pic_location, user_id) 
                        VALUES ('$med_type','$med_dalili','$med_details','$med_treat','$product_type','$med_status','$target_file', '$user_id')";
            $med_query = mysqli_query($con,$med_sql);

            if ($med_query){ 
                echo"<script> alert('Taarifa Zimefanikiwa Kutumwa')</script>"; 
                header('location:taarfa_gonjwa.php');               
            }
        }
    }
?>