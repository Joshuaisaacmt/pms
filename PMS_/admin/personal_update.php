<?php 
    include "templates/top.php";
    include "templates/navbar.php"; 
    include "action.php";
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="container">
            <div class="card card-primary">
                    <!-- form start -->
                    <form action="" method="POST">
                        <div class="card-body" >
                        <div class="form-group">
                            <label> Jina La Kwanza </label>
                            <input type="text" name="fname" class="form-control" 
                                    value="<?php echo $fname ; ?>" >
                        </div><div class="form-group">
                            <label> Jina la Kwanza </label>
                            <input type="text" name="lname" class="form-control"  
                                    value="<?php echo $lname ; ?>" >
                        </div><div class="form-group">
                            <label> Namba ya Simu </label>
                            <input type="text" name="mobile" class="form-control"  
                                    value="<?php echo "0".$mobile ; ?>" >
                        </div><div class="form-group">
                            <label> Email </label>
                            <input type="text" name="email" class="form-control"  
                                    value="<?php echo $email ; ?>" >
                        </div><div class="form-group">
                            <label> Role  </label>
                            <input type="text"  class="form-control"  
                                    value="<?php echo $role ; ?>" readonly>
                        </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer" style="float: right;">
                            <button type="update" name="update" class="btn btn-primary"> Nimemaliza </button><br>
                        </div>
                    </form>
                </div>


                <?php
                        if(isset($_POST["update"])){
                          //data to be added infos
                          $fname = strtoupper($_POST ['fname']);
                          $lname = strtoupper($_POST['lname']);
                          $mobile = $_POST ['mobile'];
                          $email = $_POST['email'];
                           
                                  $fr_sql = "UPDATE users SET fname = '$fname', lname = '$lname', 
                                        mobile = '$mobile', email = '$email' WHERE user_id = '$user_id'";
             
                                  $fr_query = mysqli_query($con,$fr_sql);

                                  if ($fr_query) {          
                                      echo"<script> alert(Update Sucessful') </script>";  
                                       // header('location: personal_info.php');
                                  }
                                  else {
                                      echo"<script> alert('Update Failed...!!!') </script>";
                                      
                                  }
                              }

                ?>
    


<?php  include "templates/footer.php"; ?>