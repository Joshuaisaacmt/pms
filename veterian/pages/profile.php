<?php 
        session_start();
        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
          header("location: ../index.php");
          exit;
        }
        include "action.php";
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PMS | User Profile</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" style="200px"
                       src="../../uploads/users/<?php echo $image;?>"
                       alt="User profile picture">
                </div>
                <!-- username  -->
                <h3 class="profile-username text-center"><?php echo $fname ."  ".$lname;?></h3>

                <p class="text-muted text-center"><?php echo $role;?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Wafugaji</b> <a class="float-right"><?php echo $user3; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Wataalam</b> <a class="float-right"><?php echo $user5; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Veterian</b> <a class="float-right"><?php echo $user4; ?></a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
                  <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                    
                        <table class="table table-striped table-sm" align="center">
                      <thead>
                        <h2>Watumiaji</h2>
                        <tr>
                           
                            <th  width="50px"> Profile Pic </th>
                            <th  width="120px">Jina la Kwanza</th>
                            <th  width="120px">Jina la Mwisho</th>
                            <th  width="90px"> Simu </th>
                            <th  width="90px"> Role </th>
                            <th  width="130px">Email </th>
                            
                          </tr>
                      </thead>
                      <tbody>
                      <?php     
                          $sql = "SELECT * FROM users WHERE role != 'admin'";
                          $query = mysqli_query($con,$sql);
                          $results = mysqli_num_rows($query);
                                if($results > 0){    
                                      while($row = mysqli_fetch_assoc($query)) {
                      ?>
                        <tr>
                          
                          <td width="50px" style="padding:9px;" class="brand-link">
                            <img src="../../uploads/users/<?php echo $row['image_location']; ?>" 
                              class="brand-image img-circle elevation-6" style="opacity: .8"alt="User_Profile"></td>
                          <td width="80px" style="padding:9px;"><?php echo $row['fname']; ?></td>
                          <td width="100px" style="padding:9px;"><?php echo $row['lname']; ?></td>
                          <td width="90px" style="padding:9px;"><?php echo "+255".$row['mobile']; ?></td>
                          <td width="90px" style="padding:9px;"><?php echo $row['role']; ?></td>
                          <td width="150px" style="padding:9px;"><?php echo $row['email']; ?></td>
                         
                        </tr>
                      </tbody>
                      <?php } } ?>
                    </table>
                   
                    </div>
                    <!-- /.post -->
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
