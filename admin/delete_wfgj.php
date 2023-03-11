<?php
    $user_id = $_GET["user_id"];
    require('connection.php');

    // delete codes 
    $sql = "DELETE FROM users WHERE user_id = '$user_id'";
    if(mysqli_query($con, $sql)){
        header('location:wafugaji.php');
        echo "<script> alert('Umefanikiwa Kuta') </script>";
    }