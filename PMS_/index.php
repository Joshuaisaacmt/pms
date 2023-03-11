<?php
    include "connection.php";

    // When form submitted, check and create user session.
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];    // removes backslashes
        $password = $_POST['password'];

        // Check user is exist in the database
        $query    = "SELECT * FROM users WHERE email = '$email'
                    AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query);

        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $role =  $row['role'];
            session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["message"] = true;
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['uname'] = $row['fname'];
            $_SESSION['role'] =  $role ;
            $_SESSION['user_id'] = $row['user_id'] ;
            $_SESSION['profile'] =  $row['image_location'] ;
            $mapping = array('Supplier' => "supplier/home.php",'Veterian' => "veterian/home.php", 'Mfugaji' => 'mfugaji/checkstatus.php', 'Admin' => 'admin/home.php' );
            header("location: $mapping[$role]"); 
       } 

        else {
            echo "<script> alert('Hakikisha Username/password sahihi na Ujaribu tena') </script>";
        }
           
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMS | Karibu </title>
    
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="dist/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="dist/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- css style  -->
    <link rel="stylesheet" href="dist/css/PMS.stylle1.css">

</head>
<body style = "background-image: url(dist/img/layout1.jpeg); background-size:cover; font-family:Georgia;">
    <nav class="nav-bar">
        <a href="index.php">
                <img src = "dist/img/logo/chicken.jpg" class="nav-logo">                 
            <span style="font-size:30px;"> POULRTY MANAGEMENT SYSTEM </h1></a> 
        </a>
    </nav>
    <div class="col3 " >              
            <h1 align="center">INGIA</h3>
                <!-- form start -->
                <form method="POST">
                    <div class="card-body" >
                        <div class="form-group">
                            <label> Email  </label>
                            <input type="email" name="email" class="form-control"  placeholder="Jaza Jina lako">
                        </div>
                        <div class="form-group">
                            <label >Neno la Siri</label>
                            <input type="password" name="password" class="form-control" placeholder="Neno la Siri">
                        </div>
                        <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-primary" style="width:100%;"> Ingia</button>
                            <br><br>
                                <p style="color:white;">Ponyeza Hapa
                                        <a href="register/register-form.php" style="color:white">
                                            <button type="button" class="btn btn-primary"> Usajili Mpya </button>
                                        </a>
                                    
                                </p>
                            </div>                        
                        </div>
                    </div>
                    <!-- /.card-body -->
                </form>
            </div>    
</body>
</html>