<?php require_once('../connection.php'); ?>
<?php
    $user_id = $_GET['sup_id'];

   if (isset($_POST['submit'])) {
       $password1 = md5($_POST ['password']);
       $password2 = md5($_POST ['repassword']);
       $password_old = md5($_POST ['password_old']);

        $check_sql = "SELECT * FROM users";
        $check_query = mysqli_query($con,$check_sql);
        if(mysqli_num_rows($check_query) == 1){
            $rows = mysqli_fetch_assoc($check_query);
            // check password 
           if ($password_old != $rows['password']) {
                echo"<script> alert('Neno la Siri  la Zamani Imekoewa!!') </script>";  
            }elseif ($password1 != $password2) {
                echo"<script> alert('Neno la Siri Imekosewa!!') </script>"; 
            }
        }else{
            $password = $password1;
            $action = mysqli_query($con,"UPDATE users SET password = '$password' WHERE user_id = '$user_id'");
            if($action){    
                echo"<script> alert('Umefanikiwa Kbadilisha Neno la Siri') </script>";  
                header('location:supplier.php'); }
        }         
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMS | Admin </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../dist/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../dist/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
     <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/style_3.css">
    <link rel="stylesheet" href="../dist/css/PMS.stylle1.css">
</head>
<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <nav class="nav-bar">
            <a href="register-form.php">
                    <img src = "../dist/img/logo/chicken.jpg"class="nav-logo">                 
                <span style="font-size:30px;"> POULRTY MANAGEMENT SYSTEM </h1></a> 
            </a>
        </nav>   
        <section class="content"> <!-- Main content -->
            <div class="container-fluid"> 
                <div class="container col11 text-dark card"  style="position:relative; top:80px; width:500px;"><br>
                    <h3 class="text-center bg-dark"> <b> BADILISHA NENO LA SIRI </b> </h3>
                        <div class="row" >
                            <form method="POST" autocomplete="off" action="<?php echo $_SERVER['PHP_SELF'];?>">
                                <div class="card-body" >
                                <div class="form-group" style="width:100%; float:left; padding-right:20px;">
                                        <label> Jaza Neno la siri Zamani </label>
                                        <input type="password"  class="form-control"  name="password_old" style="width:100%;" required>
                                    </div>
                                    <div class="form-group" style="width:100%; float:left; padding-right:20px;">
                                        <label> Jaza Neno la siri Jipya </label>
                                        <input type="password"  class="form-control"  name="password" style="width:100%;" required>
                                    </div>
                                    <div class="form-group" style="width:100%; ">
                                        <label> Rudia Neno la Siri Jipya</label>
                                        <input type="password"  class="form-control"  name="repassword" style="width:100%;"  required>
                                    </div>
                                    <div class="modal-footer text-center bg-dark" >
                                        <a href="veterian.php">
                                            <button type="button" class="btn btn-primary">Nyuma</button>
                                        </a>
                                        <button type="submit" name="submit" class="btn btn-primary">Jisajili</button> 
                                    </div>
                                </div>                               
                            </form>
                        </div>  
                </div>  
            </div>  
        </section>
    </div>
</body>
</html>