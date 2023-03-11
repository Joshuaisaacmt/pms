<?php 
    include "templates/top.php";
    include "templates/navbar.php"; 
    include "action.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content"  style="padding-top:10px;">
        <div class="container-fluid">
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                  <h3 class="text-center bg-dark"> <b> TAARIFA ZA MALISHO </b> </h3>
                  <thead class="text-center">
                    <tr>
                      <th></th>
                      <th width="40%">Maelezo cha Chakula</th>
                      <!-- <th width="15%">Aina ya Kuku</th> -->
                      <th width="10%">Kiwango cha Maji </th>
                      <th width="40%">Muda Pangwa</th>
                      <th width="20%">Maelezo cha Chakula</th>
                    </tr>
                  </thead>
                  <?php
                          $results = mysqli_num_rows($activity_query);
                          if($results > 0){    
                                while($activity_rows= mysqli_fetch_assoc($activity_query)) { 
                    ?>
                  <tbody>
                    <tr>
                      <td></td>
                      <td width="40%"><?php echo "<b>"  . $activity_rows['food_subject']."</b><br>
                                                  ".$activity_rows['food_details']; ?></td>          
                      <td width="10%"><?php echo " " . $activity_rows['water_activity']." lita <br>kwa siku"; ?></td>
                      <td width="40%"><?php echo $activity_rows['data_actvty']."<br><b> Kumbuka </b><br> Tarehe " . $activity_rows['schedule_activity']."
                                             hii ndio Utabadilisha Aina ya Chakula cha kuku <br>"; ?></td>
                      <td width="30%"><?php echo " " . $activity_rows['food_qnty']." Kilo <br>kwa siku"; ?></td>
                    </tr>
                  </tbody>
                  <?php } } ?>
                  <table>
          </div>
         </div>
       </div>

            


<?php  include "templates/footer.php"; ?>