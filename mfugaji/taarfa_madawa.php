<?php 
    include "templates/top.php";
    include "templates/navbar.php";
    include "action.php"; 
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content" style="padding-top:10px;">
        <div class="container-fluid">
            <div class="container">
              <div class="table-responsive">
                <table class="table table-striped table-sm">
                  <h3 class="text-center bg-dark"> <b> TAARIFA ZA MADAWA </b> </h3>
                  <thead>
                    <tr>
                      <th>#</th>
                      <th> Dawa </th>
                      <th>Maelezo ya Dawa </th>
                      <th>Muda Pangwa wa Dawa </th>
                      <th>Dawa ya Gonjwa</th>
                    </tr>
                  </thead>
                  <?php
                          $med_results = mysqli_num_rows($med_query);
                          if($med_results > 0){    
                                while($med_rows= mysqli_fetch_assoc($med_query)) {                                  
                    ?>
                  <tbody>
                    <tr>
                      <td></td>
                      <td width="20%"><?php echo" ". $med_rows['med_status']; ?></td>
                      <td width=40%"><?php echo" ". $med_rows['med_treat']; ?></td>
                      <td width="10%"><?php echo" ". $med_rows['med_time'];?></td>
                      <td width="30%"><?php echo" ". $med_rows['med_purpose']; ?></td>
                  </tbody>
                  <?php } } ?>
                  <table>
          </div>
        </div>
<?php  include "templates/footer.php"; ?>