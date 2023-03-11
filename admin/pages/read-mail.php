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
      // $selected_sms = 1;
      $selected_sms = $_GET["sms_id"];
      $sms_status = 1;
      $sms_update = "UPDATE message SET sms_status = '$sms_status' WHERE sms_id = '$selected_sms'";
      $sms_query = mysqli_query($con, $sms_update);

      $sql = "SELECT * FROM message WHERE sms_id = '$selected_sms'";
      $query = mysqli_query($con,$sql);
      $results = mysqli_num_rows($query);
            if($results > 0){    
                while($sms_row = mysqli_fetch_assoc($query)) {
?>
<div class="wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <a href="mailbox.php" class="btn btn-primary btn-block mb-3">Back to Inbox</a>
          </div>
          <!-- /.col -->
        <div class="col-md-9">
          <div class="card card-primary card-outline">
            <div class="card-body p-0">
              <div class="mailbox-read-info">
                <h5><?php echo"<span style=''> Message Subject: <a href='#'>".$sms_row["sms_subject"]."</a></span>"?></h5>                    
                  <span class="mailbox-read-time float-right"></span></h6>
              </div>
              <!-- /.mailbox-read-info -->
              <div class="mailbox-controls with-border">
                <div class="btn-group text-left">
                  <h5><?php echo"<span> Kutoka: <a href='#'>".$sms_row["sender"]."</a></span>"?></h5>
                  <!-- <button type="button" class="btn btn-default btn-sm" style="margin" data-container="body" title="Reply">
                    <i class="fas fa-reply"><?php echo $sms_row["sms_time_sent"]?></i>
                  </button> -->
                </div>
              </div>
              <!-- /.mailbox-controls -->
              <div class="mailbox-controls with-border">
                <div class="btn-group">
                  <h5><?php echo"<span> Kwenda: <a href='#'>".$sms_row["receiver"]."</a></span>"?></h5>
                  <!-- <button type="button" class="btn btn-default btn-sm" style="margin" data-container="body" title="Reply">
                    <i class="fas fa-reply"><?php echo $sms_row["sms_time_sent"]?></i>
                  </button> -->
                </div>
              </div>
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message bg-dark" style="padding:20px;">
                <p>Hello <?php echo $sms_row["receiver"]?>,</p>

                <p><?php echo $sms_row["sms_content"]?></p>

              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.card-body -->
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
