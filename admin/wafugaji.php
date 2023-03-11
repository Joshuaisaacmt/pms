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
                    <h3 class="text-center bg-dark"> <b> MFUGAJI </b> </h3>
                  <thead>
                    <tr>
                      <th></th>
                      <th>Firstname</th>
                      <th>Lastname</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>Sehemu ya Makazi</th>
                      <th>Taarifa za MAjukumu</th>
                      <th>Change Password</th>
                    </tr>
                  </thead>
                    <?php 
                        $sup_sql = "SELECT * FROM users WHERE role = 'Mfugaji'";
                        $sup_query = mysqli_query($con,$sup_sql);
                        $sup_results = mysqli_num_rows($sup_query);
                            if($sup_results > 0){    
                            while($row = mysqli_fetch_assoc($sup_query)) {
                    ?>
                  <tbody>
                    <tr>
                      <td>#</td>
                      <td><?php echo $row["fname"];?></td>
                      <td><?php echo $row["lname"];?></td>
                      <td><?php echo $row["email"];?></td>
                      <td><?php echo "0".$row["mobile"];?></td>
                      <td><?php echo $row["home_place"];?></td>
                      <td><?php echo "<a href='active.php?user_id=".$row['user_id']. "'> Reset "?></td>
                      <td><?php echo "<a href='change.php?sup_id=".$row['user_id']. "'> Reset "?></td>
                    </tr>
                  </tbody>
                  <?php   
          }
      }
?>
                </table>
              </div>
   


<?php  include "templates/footer.php"; ?>