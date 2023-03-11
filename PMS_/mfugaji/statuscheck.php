<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMS | Mfugaji</title>

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
    <!-- css files -->
    <link rel="stylesheet" href="../dist/css/style_2.css">
    <link rel="stylesheet" href="../dist/css/lib/w3.css">

    <style>
        .inputer { width: 100%;  padding: 20px 20px;
            margin: 8px 0; box-sizing: border-box; border: none;
            background-color: #3CBC8D;  color: white;
        }
    </style>
</head>
<body style="background-image:url(../dist/img/layout2.jpeg); background-size:cover;">
    <div class="wrapper">
        <nav class="nav-bar">
            <a href="#">
                    <img src = "../dist/img/logo/chicken.jpg"class="nav-logo">                 
                <span style="font-size:30px;"> POULRTY MANAGEMENT SYSTEM </h1></a> 
            </a>
        </nav>   
        <section class="content"> <!-- Main content -->
            <div class="container-fluid"> 
                <div class="container text-dark card"  style="position:relative; top:80px;  width:700px; "><br>
                    <h1 class="text-center bg-dark"> <b> TAARIFA ZA KUKU </b> </h1>
                        <div class="row">
                            <form method="POST" autocomplete="off" action="status_action.php">
                                <div class="card-body" >
                                    <div class="form-group" style="width:100%; float:left;">
                                        <label> Jaza aina ya Kuku</label>
                                        <select class="form-control select2 select2-hidden-accessible" name="product_type" style="width: 100%;" 
                                                    aria-hidden="true">
                                                <option  value="Brolier">BROLIER</option>
                                                <option value="Layering">LAYERING</option>
                                                <option value="Chotara"> CHOTARA</option>
                                        </select>      
                                    </div>
                                    <div class="form-group" style="width:100%; float:left;">
                                        <label> Jaza za tarehe ya Kutotolewa </label>
                                        <input type="date" class="form-control" name="product_arrival" style="width:100%; color:dark;">
                                    </div>
                                    <div class="form-group" style="width:100%; float:left;">
                                        <label> Jaza idadi ya kuku </label>
                                        <input type="number" class="form-control"  name="product_qnty" style="width:100%; color:dark;">
                                    </div>
                                    <div class="modal-footer text-center bg-dark" height="20px" >
                                        <a href="../index.php">
                                            <button type="button" class="btn btn-primary">Nyuma</button>
                                        </a>
                                        <button type="submit" name="submit" class="btn btn-primary">Tuma</button> 
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