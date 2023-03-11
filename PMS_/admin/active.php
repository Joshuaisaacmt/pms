<?php require_once('../connection.php'); ?>
<?php
    $user_id = $_GET['user_id'];
    if(isset($_GET['user_id'])){
        $on = '1';
        $user_id = $_GET['user_id'];
        $update = mysqli_query($con,"UPDATE users SET status = '0' WHERE user_id = '$user_id'");
            if($action){    
                echo"<script> alert('Umefanikiwa Kbadilisha Neno la Siri') </script>";  
                header('location:wafungaji.php'); }
            }      
    }
?>