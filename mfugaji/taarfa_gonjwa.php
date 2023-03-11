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
                <table class="table table-striped">
                    <h3 class="text-center bg-dark"> <b>MAELEZO YA MAGONJWA</b> </h3>
                  <thead class="text-center">
                    <tr>
                      <th></th>
                      <th>Hali Ugonjwa</th>
                      <th>Picha ya Hali Mfugo<br>
                        </th>
                      <th>Maelezo ya gonjwa </th>
                      <th>Dalili ya gonjwa </th>
                      <th>Matibabu ya Gonjwa</th>
                    </tr>
                  </thead>
                  <?php 
                            if($sup_results > 0){    
                            while($row = mysqli_fetch_assoc($sup_query)) {
                    ?>
                  <tbody>
                    <tr>
                      <td width="5%"><?php echo $row["med_id"];?></td>
                      <td width="15%"><?php echo $row["med_status"];?></td>
                      <td width="20%"><a href="<?php echo $row["pic_location"];?>">
                                          <img src="<?php echo $row["pic_location"];?>" width='200px' height='150px'></a>
                      </td>
                      <td width="20%"><?php echo" ".$row["med_purpose"];?></td>
                      <td width="20%"><?php echo $row["med_dalili"];?></td>
                      <td width="20%"><?php echo "<b>".$row["med_type"].
                                            "</b><br><br>".$row['med_treat']?> </td>
                    </tr>
                  </tbody>
                  <?php                             }                      }                ?>
                </table>  
              </div>
                      
        </div>

<?php  include "templates/footer.php"; ?>