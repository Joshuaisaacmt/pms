<?php include "templates/top.php";    include "templates/navbar.php";     include "pages/action.php";  ?>
<div class="content-wrapper">
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
<div class="wrapper">
    <!-- Main content -->
    <section class="content" style="padding-top:20px;">
      <div class="container-fluid">
        <div class="row" style="padding-right:50px; padding-left:20px;">
          <div class="col-md-3">
            <a href="mail-box.php" class="btn btn-primary btn-block mb-3">Rudi Nyuma</a>

            <div class="card">
              <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item active">
                    <a href="#" class="nav-link">
                      <i class="fas fa-inbox"></i> Inbox
                      <span class="badge bg-primary float-right">12</span>
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
            <div class="card-header bg-green">
              <h3 class="card-title">UJUMBE  <?php echo $sms_row["receiver"]; ?></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <div class="mailbox-read-info">
                    <!-- Is Placed Here -->
                    <h5>Kichwa Cha Ujumbe: <?php echo " <a href='#'>".$sms_row["sms_subject"]."</a>"?> </h5><br>
                    <h6>Kutoka : <?php echo $sms_row["sender"]?>
                    <span class="mailbox-read-time float-right"><?php echo $sms_row["sms_time_sent"]?></span></h6>
                </div>
              </div>
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                <p>Habari <?php echo $sms_row["receiver"]?>,</p>

                <p><?php echo $sms_row["sms_content"]?></p>

              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.card-body -->
            <?php
            }
        }
      }
    }
    ?>

<?php include "templates/footer.php"; ?>