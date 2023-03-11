<?php include "templates/top.php";    include "templates/navbar.php";     include "pages/action.php";  ?>
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content" style="padding-right:50px; padding-top:20px; padding-left:50px;">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
                <h1 class="text-center bg-dark"> <b> ARIFA </b> </h1>
            </div><!-- /.card-header -->            
            <div class="card-body p-0">              
              <div class="table-responsive mailbox-messages">
              <?php
                  // 
                  $selected = $_SESSION['uname'] ;              
                  $sql = "SELECT * FROM message WHERE receiver = '$fname'";
                  $query = mysqli_query($con,$sql);
                  $results = mysqli_num_rows($query);
                        if($results > 0){    
                              while($row = mysqli_fetch_assoc($query)) {
              ?>
                <table class="table table-hover table-striped">
                    <tbody>
                        <tr>
                            <td width="10%">
                                <div class="icheck-primary">
                                <input type="checkbox" value="" id="check2">
                                <label for="check2"></label>
                                </div>
                            </td>
                            <td class="mailbox-star" width="">
                                <a href="#">
                                    <i class="fas fa-star-o text-warning"></i>
                                </a>
                            </td>
                            <td class="mailbox-name" width="30px">
                                <?php echo "<h4>".$row['sender']."</h4>"; ?>
                            </td>
                            <td class="mailbox-name" width="30px">
                                <?php echo "<h4><a href='read-mailbox.php?sms_id=".$row['sms_id']."'>".$row['receiver']?>
                            </td>                        
                            <td class="mailbox-subject" width=65%">
                                <b><?php echo $row["sms_subject"]?> .......</b>
                            </td>
                            <td class="mailbox-date" width="40%">
                                <?php echo $row["sms_time_sent"]?>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- /.table -->
                <?php
                        }
                    }
                ?>
                <div class="mailbox-controls">
                
                </div>
                <div class="float-right">
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm">
                      <!-- <i class="fas fa-chevron-left"></i> -->
                    </button>
                    <button type="button" class="btn btn-default btn-sm">
                      <!-- <i class="fas fa-chevron-right"></i> -->
                    </button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
              </div>
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->
    


<?php include "templates/footer.php"; ?>