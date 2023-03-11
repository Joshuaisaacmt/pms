<?php include "templates/top.php";    include "templates/navbar.php"; ?>
<?php 
                // USER INFORMATION RETRIVED
                $user_id = $_GET['user_id']; // declare session
                $product_sql = "SELECT * FROM users WHERE user_id = '$user_id'";
                $product_query = mysqli_query($con,$product_sql);
                if(mysqli_num_rows($product_query) == 1){
                    $product_rows = mysqli_fetch_assoc($product_query);
                    $fname = $product_rows['fname'];
                    $lname = $product_rows['lname'];
                    $email = $product_rows['email'];
                    $mobile = $product_rows['mobile'];
                    $role = $product_rows['role'];
                    $image = $product_rows['image_location'];
                }

                //PRODUCT INFORMATION RETRIVED
                $product_sql = "SELECT * FROM product_info WHERE user_id = '$user_id'";
                $product_query = mysqli_query($con,$product_sql);
                if(mysqli_num_rows($product_query) > 0 ){
                    $product_rows = mysqli_fetch_assoc($product_query);
                    $tarh_arrival = $product_rows['tarh_arrival'];
                    $tarh_depart = $product_rows['tarh_depart'];
                    $product_qnty = $product_rows['product_qnty'];
                    $product_type = $product_rows['product_type'];         
                }
    
    ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><b> POULTRY MANAGEMENT SYSTEM </b><br>
              Karibu, <?php echo $role; ?> </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Nyumbani</a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                    <!-- form start -->
                    <form action="" method="POST">
                        <caption><h2>Accounti ya Mfugaji</h2></caption>
                        <div class="card-body " >
                            <div class="form-group  box1">
                                <label> Jina La Kwanza </label>
                                <input type="text" name="fname" class="form-control" 
                                        value="<?php echo $fname ; ?>" >
                            </div>
                            <div class="form-group  box1">
                                <label> Jina la Mwisho </label>
                                <input type="text" name="lname" class="form-control"  
                                        value="<?php echo $lname ; ?>" >
                            </div>
                            <div class="form-group  box1">
                                <label> Namba ya Simu </label>
                                <input type="text" name="mobile" class="form-control"  
                                        value="<?php echo "0".$mobile ; ?>" >
                            </div>
                            
                            <div class="form-group  box1">
                                <label> Email </label>
                                <input type="text" name="email" class="form-control"  
                                        value="<?php echo $email ; ?>" >
                            </div>
                            <div class="form-group  box1">
                                <label> Role  </label>
                                <input type="text"  class="form-control"  
                                        value="<?php echo $role ; ?>" readonly>
                            </div>
                            <div class="form-group  box1">
                                <label> Aina ya Mfugo </label>
                                <input type="text" name="fname" class="form-control" 
                                        value="<?php echo $product_type ; ?>" >
                            </div>
                            <div class="form-group  box1">
                                <label> Idadi ya Mfugo </label>
                                <input type="text" name="fname" class="form-control" 
                                        value="<?php echo $product_qnty ; ?>" >
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer" style="float: right;">
                            <button type="update" name="update" class="btn btn-primary"> Nimemaliza </button><br>
                        </div>
                    </form>
                </div>

        <?php require('action.php'); require('templates/footer.php');?>    
    
</body>
</html>