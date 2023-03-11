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
                    <div class="text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">Ongeza</button>
                    </div>
                  <thead class="text-center">
                    <tr>
                      <th></th>
                      <th>Hali Ugonjwa</th>
                      <th>Picha ya Mfugo<br>
                          <i style="color:red;">
                            Ambatanisha Picha ya <br>
                            hali ya Mfugo au Kinyesi
                          </i>
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
                      <td width="10%"><?php echo $row["med_status"];?></td>
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

<!-- mODAL YA kUUPDATE DTA -->
      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">MAELEZO YA MAGONJWA </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    <form method="POST" action="upload.php" enctype="multipart/form-data">
                        <div class="card-body" >
                            <div class="form-group" style="width:50%; float:left;">
                                <label>Hali Ugonjwa </label>
                                <input type="text" class="form-control" name="med_status" style="width:90%;">
                            </div>
                            <div class="form-group" style="width:50%; float:left;">
                                 <label> Aina ya Kuku</label>
                                     <select class="form-control select2 select2-hidden-accessible" name="product_type" style="width: 90%;" 
                                                    aria-hidden="true">
                                          <option  value="Brolier">BROLIER</option>
                                          <option value="Layering">LAYERING</option>
                                          <option value="Chotara"> CHOTARA</option>
                                          <option value="Chotara, Layering, na Brolier"> BROLIER, CHOTARA NA LAYERING </option>
                                      </select>      
                            </div>
                            <div class="form-group" style="width:50%; float:left;">
                                <label> Aina ya Madawa </label>
                                <input type="text"  class="form-control"  name="med_type"  style="width:90%;">
                            </div><br>
                            <div class="form-group" style="width:50%; float:left;">
                                <label> Pakia Picha ya</label>
                                <input type="file"  class="form-control"  name="image" id="image" style="width:90%;">
                            </div>
                            <div class="form-group" style="width:100%; float:left;">
                                <label> Matibabu ya Gonjwa </label>
                                <textarea  class="form-control"  name="med_treat" style="width:100%;"> </textarea>
                            </div>
                            <div class="form-group" style="width:100%; float:left;">
                                <label> Dalili ya gonjwa </label>
                                <textarea  class="form-control"  name="med_dalili" style="width:100%;"> </textarea>
                            </div>
                                                        
                            <div class="form-group"  style="width:100%; float:left;">
                                <label>Maelezo ya gonjwa</label>
                                <textarea  class="form-control"  name="med_details" style="width:100%;"> </textarea>
                            </div>
                            <div class="modal-footer justify-content-between" style="width:100%;">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Funga</button>
                                <button type="submit" name="submit" class="btn btn-primary">Nimemaliza</button>                    
                      </form>
                        </div>
                            
                </div>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    
<?php  include "templates/footer.php"; ?>