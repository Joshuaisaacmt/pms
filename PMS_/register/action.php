<?php    
    require_once('../connection.php');
   if (isset($_POST['submit'])) {
         $fname = strtoupper($_POST ['fname']);
        $lname = strtoupper($_POST['lname']);
        $mobile = $_POST ['mobile'];
        $email = $_POST['email'];
        $role = $_POST['role'];
        $home_place = $_POST['home_place'];
        $password1 = md5($_POST ['password']);
        $password2 = md5($_POST ['repassword']);
        $create_datetime = date("Y-m-d H:i:s");
        $target_dir = "../uploads/users/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $check_sql = "SELECT * FROM users";
            $check_query = mysqli_query($con,$check_sql);
            if(mysqli_num_rows($check_query)>0){
                $rows = mysqli_fetch_assoc($check_query);
               // check password 
                if ($email == $rows['email']) {
                            echo"<script> alert('Email imeshatumika!!') </script>"; 
                }elseif ($mobile == $rows['mobile']) {
                            echo"<script> alert('Namba ya Simu imeshatumika!!') </script>"; 
                }
            }

            if ($password1 != $password2) {
                echo"<script> alert('Neno l Siri Imekoewa!!') </script>";  
            }else {
                $password = $password1;
                // Allow certain file formats
                        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif" ) {
                            echo"<script> prompt('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>"; 
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
                        
                        $sql = "INSERT INTO users(fname,lname,role,mobile,email, password, reg_time, home_place, image_location) 
                                        VALUES 
                                ('$fname','$lname','$role','$mobile','$email','$password','$create_datetime','$home_place','$target_file')";

                        $query = mysqli_query($con,$sql);

                        if ($query > 0) {          
                            echo"<script> alert('Registration Sucessful') </script>";  
                            header('location:../index.php');
                        }
                        else {
                            echo"<script> alert('Kuna Nafasi bado Wazi !!!!! .........') </script>";
                        }           
                    }  
                }
   }
?>