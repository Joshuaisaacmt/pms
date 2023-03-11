<?php
      session_start (); include "../connection.php";
      $user_id = $_SESSION['user_id'];

      $check_sql = "SELECT * FROM users WHERE user_id = '$user_id'";
      $check_query = mysqli_query($con,$check_sql);
      $results = mysqli_num_rows($check_query); 
      if($results > 0){
        while($row = mysqli_fetch_assoc($check_query)) {
          if ($row['status'] == 1) {
            header('location:home.php');
          } else {
            header('location:statuscheck.php');
          }
          
        }
      }
    
