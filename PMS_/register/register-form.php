
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMS | Usajili </title>
    
    <!-- CSS links -->
    <!-- <link rel="stylesheet" href="../css/login_sty.css"/>
    <link rel="stylesheet" href="../css/lib/w3.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css"/> -->

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
                <div class="container col11 text-dark card"  style="position:relative; top:80px;"><br>
                    <h3 class="text-center bg-dark"> <b> USAJILI </b> </h3>
                        <div class="row" >
                            <form method="POST" autocomplete="off" action="action.php">
                                <div class="card-body" >
                                    <div class="form-group" style="width:50%; float:left; padding-right:20px;">
                                        <label> Jaza Jina La Kwanza </label>
                                        <input type="text" class="form-control" name="fname" style="width:100%;">
                                    </div>
                                    <div class="form-group" style="width:50%; float:left;">
                                        <label> Jaza Jina la Mwisho </label>
                                        <input type="text"  class="form-control"  name="lname" style="width:100%;" >
                                    </div><br>
                                    <div class="form-group" style="width:50%; float:left; padding-right:20px;">
                                        <label> Jaza Namba ya Simu </label>
                                        <input type="number"  class="form-control"  name="mobile" style="width:100%;" >
                                    </div>
                                    <div class="form-group" style="width:50%; float:left;">
                                        <label> Jaza Email </label>
                                        <input type="email"  class="form-control"  name="email" style="width:100%;" required >
                                    </div>
                                    
                                    <div class="form-group" style="width:50%; float:left; padding-right:20px;">
                                        <label>Jisajili Kama; </label>
                                        <select class="form-control select2 select2-hidden-accessible" name="role" style="width: 100%;" 
                                                    aria-hidden="true">
                                                <option  value="Mfugaji">MFUGAJI</option>
                                                <option value="Veterian">VETERIAN</option>
                                                <option value="Supploer"> SUPPLIER</option>
                                        </select>      
                                    </div>
                                    <div class="form-group"  style="width:50%; float:left;">
                                        <label> Jaza Sehemu ya Makazi</label>
                                        <input type="text"  class="form-control"   name="home_place" style="width:100%;" >
                                    </div>
                                    <div class="form-group" style="width:50%; float:left; padding-right:20px;">
                                        <label> Jaza Neno la siri </label>
                                        <input type="password"  class="form-control"  name="password" style="width:100%;" required>
                                    </div>
                                    <div class="form-group" style="width:50%; float:left;">
                                        <label> Jaza Neno la Siri </label>
                                        <input type="password"  class="form-control"  name="repassword" style="width:100%;"  required>
                                    </div>
                                    <div class="form-group" style="width:100%;">
                                        <label> Pakia Profile Picha </label>
                                        <input type="file"  class="form-control"  name="image" id="image" style="width:100%;" required>
                                    </div>
                                    <div class="modal-footer text-center bg-dark" >
                                        <a href="../index.php">
                                            <button type="button" class="btn btn-primary">INGIA</button>
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