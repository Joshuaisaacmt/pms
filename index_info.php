<?php
         include "connection.php";

         // When form submitted, check and create user session.
         if (isset($_POST['uname'])) {
             $username = $_POST['uname'];    // removes backslashes
             $_password = $_POST['password'];

             // Check user is exist in the database
             $query    = "SELECT * FROM users WHERE fname = '$username'
                         AND password='" . md5($_password) . "'";
             $result = mysqli_query($con, $query);

             if(mysqli_num_rows($result) == 1) {
                 $row = mysqli_fetch_assoc($result);
                 $role =  $row['role'];
                 session_start();
                 $_SESSION["loggedin"] = true;
                 $_SESSION['user_id'] = $row['user_id'];
                 $_SESSION['uname'] = $username ;
                 $_SESSION['user_id'] = $row['user_id'] ;
                 $_SESSION['profile'] =  $row['image_location'] ;
                 $mapping = array('Mtaalam' => "mtaalam/home.php", 'Mfugaji' => 'mfugaji/checkstatus.php', 'Admin' => 'admin/home.php' );
                 header("location: $mapping[$role]"); 
            } 

             else {
                 echo "<script> alert('Hakikisha Username/password sahihi na Ujaribu tena') </script>";
             }
                
         }

       