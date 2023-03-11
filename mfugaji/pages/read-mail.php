<?php
    session_start();
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
      header("location: ../index.php");
      exit;
    }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PMS | Read Mail</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<?php
       require('../../connection.php');
       $fname = $_SESSION['uname'];
      // idadi ya Wafugaji mpya
      $count3 = "SELECT COUNT(*) as role3  FROM message  WHERE receiver = '$fname'";
      $count3_query = mysqli_query($con,$count3);
      if(mysqli_num_rows($count3_query)){
          $rows = mysqli_fetch_assoc($count3_query);
            $sms3 = $rows['role3'];
      }  
?>

<div class="wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <a href="mailbox.php" class="btn btn-primary btn-block mb-3">Rudia Nyuma</a>

            <div class="card">
              <div class="card-header">
              </div>
              <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item active">
                    <a href="#" class="nav-link">
                      <i class="fas fa-inbox"></i> Ujumbe
                      <span class="badge bg-primary float-right"><?php echo $sms3; ?></span>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        <div class="col-md-9">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Soma Ujumbe</h3>
              <?php 
                  // $selected_sms = 1;
                  if(isset($_GET["sms_id"])){
                    $selected_sms = $_GET["sms_id"];
                    $sms_update_sql = "UPDATE message SET sms_status = 1 WHERE sms_id = '$selected_sms'";
                    $sms_query = mysqli_query($con,$sms_update_sql);
                    if($sms_query){
                        $sql = "SELECT * FROM message WHERE sms_id = '$selected_sms'";
                        $query = mysqli_query($con,$sql);
                        $results = mysqli_num_rows($query);
                              if($results > 0){    
                                  while($sms_row = mysqli_fetch_assoc($query)) {
              ?>
              <div class="card-tools">
                <a href="#" class="btn btn-tool" title="Previous"><i class="fas fa-chevron-left"></i></a>
                <a href="#" class="btn btn-tool" title="Next"><i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-read-info">
                <!-- Is Placed Here -->
                <h5>Kichwa cha Arifa: <?php echo " <a href='#'>".$sms_row["sms_subject"]."</a>"?> </h5><br>
                <h6>Kutoka: <?php echo $sms_row["sender"]?>
                  <span class="mailbox-read-time float-right"><?php echo $sms_row["sms_time_sent"]?></span></h6>
              </div>
              <!-- /.mailbox-read-info -->
              <div class="mailbox-controls with-border text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm" data-container="body" title="Delete">
                    <i class="far fa-trash-alt"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm" data-container="body" title="Reply">
                    <i class="fas fa-reply"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm" data-container="body" title="Forward">
                    <i class="fas fa-share"></i>
                  </button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm" title="Print">
                  <i class="fas fa-print"></i>
                </button>
              </div>
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                <p>Habari  <?php echo $sms_row["receiver"]?>,</p>

                <p><?php echo $sms_row["sms_content"]?></p>

              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <a href="">
                <button type="button" class="btn btn-default"><i class="far fa-trash-alt"></i> Delete</button>
              </a>              
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <?php
            }
        }
      }
    }
    ?>
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
