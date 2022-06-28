<?php include "index_info.php"; ?>
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
<body style = "background-image: url(dist/img/layout1.jpeg); background-size:cover;">
    <nav class="nav-bar">
        <a href="#">
                <img src = "dist/img/logo/chicken.jpg"class="nav-logo">                 
            <span style="font-size:30px;"> POULRTY MANAGEMENT SYSTEM </h1></a> 
        </a>
    </nav>

    <div class="col3" >
        <div class="card card-primary">
                <!-- <div class="card-header">
                    <!-- <h3 class="card-title">Ingia</h3> -->
                </div> 
                <!-- /.card-header -->
                <h1 align="center">Ingia</h3>
                <!-- form start -->
                <form method="POST">
                    <div class="card-body" >
                    <div class="form-group">
                        <label> Username </label>
                        <input type="text" name="uname" class="form-control"  placeholder="Jaza Jina lako">
                    </div>
                    <div class="form-group">
                        <label >Neno la Siri</label>
                        <input type="password" name="password" class="form-control" placeholder="Neno la Siri">
                    </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer" style="">
                        <button type="submit" class="btn btn-primary"> Ingia</button><br>
                        <h4> kuunda Account mpya<a href="registration/register-form.php"> Ponyeza hapa </a>
                    </div>
                </form>
            </div>
    
</body>
</html>