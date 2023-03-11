<?php include "templates/top.php";  include "templates/navbar.php";   include "action.php"; ?>    

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><b> POULTRY MANAGEMENT SYSTEM </b><br>
              Karibu, <?php echo $role; ?> </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Nyumbani</a></li>
              <li class="breadcrumb-item active"> Orodha Bidhaa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="container" style="padding-top: 10px;">
          <div class="row">
            <div calss="col-md-4">
              <h3> Jina la Kampuni : <?php echo "<i>".$kampuni = "GOLD CHOICE INVESTMENT </i>"; ?></h3>
            </div>
            <div class="col-md-12">
              <table class="table table-striped">
                <button class="btn btn-primary" style="float:right; padding:6px 25px; margin-bottom:2px;" 
                          data-toggle="modal" data-target="#modal-lg">Pakia</button>
                <thead class="bg-dark">
                  <tr><!-- where = location, who = customer, price , advertisement  -->
                    <td>#</td>
                    <td>Aina ya Bidhaa</td>
                    <td>Maelezo ya Bidhaa</td>
                    <td> Picha ya Bidhaa</td>
                    <td>Idadi ya Bidhaa</td>                    
                    <td>Bei za Bidhaa <br><i>(Kwa Kimoja)</i></td>
                    <td>Bei za Bidhaa <br><i>(Kwa Jumla)</i></td>
                  </tr>
                </thead>
                <?php
                          $results = mysqli_num_rows($prod1_query);
                          if($results > 0){    
                                while($prod1_rows= mysqli_fetch_assoc($prod1_query)) {                                  
                    ?>
                  <tbody style="margin:2px;">
                    <tr>
                      <td></td>
                      <td width="20%"><?php echo "<b>"  . $prod1_rows['P_name'] ?></td>
                      <td width="30%"><?php echo " " . $prod1_rows['P_content']; ?></td>
                      <td width="20%"</td>
                      <td width="20%"><?php echo " " . $prod1_rows['P_qnty']; ?></td>
                      <td width="20%"><?php echo " " . $prod1_rows['P_price']; ?></td>
                      <td width="30%"><?php echo " " . $prod1_rows['T_price']; ?></td>
                    </tr>
                  </tbody>
                  <?php } } ?>
              </table>
            </div>
          </div>


      <!-- MODAL YA ADD new Product DTA -->
      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" align="center"> Taarifa za Bidhaa Mpya</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    <form method="POST" action="">
                        <div class="card-body" >
                            <div class="form-group" style="width:50%; float:left; padding-right:12px;">
                                <label>Jina ya Bidhaa</label>
                                  <select class="form-control select2 select2-hidden-accessible" name="P_name" style="width: 100%;" 
                                            aria-hidden="true">
                                          <option selected="selected" value="<?php echo $P_name; ?>"><?php echo $P_name1; ?></option>
                                          <option  value="Starter Crumble">Starter Crumble</option>
                                          <option value="Grower"> Grower Crumble</option>
                                          <option value="Finisher"> Finisher Pellet</option>
                                          <option value="Post FInisher"> Post Finisher</option>
                                  </select>      
                            </div>
                            <div class="form-group" style="width:50%; float:left;">
                                 <label>Aina ya Bidhaa</label>
                                  <select class="form-control select2 select2-hidden-accessible" name="P_type" style="width: 100%;" aria-hidden="true">
                                          <option selected="selected" value="<?php echo $P_type; ?>"><?php echo $P_type1; ?></option>
                                          <option  value="Madawa"> Madawa</option>
                                          <option value="Falcon"> Falcon</option>
                                          <option value="Mesh"> Mesh</option>
                                  </select>                  
                            </div>  
                            <div class="form-group" style="width:50%; float:left;  padding-right:12px;">
                                <label> Idadi ya Bidhaa <i>(terms bags)</i></label>
                                <input type="Number" class="form-control" value="<?php echo $P_qnty1; ?>" name="P_qnty" style="width:100%;" required>
                            </div>
                            <div class="form-group" style="width:50%; float:left;">
                                <label> Bei ya Bidhaa</label>
                                <input type="Number" class="form-control" value="<?php echo $P_price1; ?>" name="P_price" style="width:100%;" required >
                            </div> 
                            <div class="form-group" style="width:100%;">
                                <label> Pakia picha Bidhaa</label>
                                <input type="file" class="form-control" value="<?php echo $P_price1; ?>" name="img" style="width:100%; padding-bottom:45px;" required >
                            </div> 
                            <div class="form-group" style="width:100%;">
                                <label>Maelezo ya Bidhaa</label>
                                <textarea class="form-control" value="<?php echo $P_content1; ?>" name="P_content" 
                                    style="width:100%; height:90px;"></textarea>
                            </div>    
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Funga</button>
                                <button type="submit" name="Submit" class="btn btn-primary">Nimemaliza</button>                    
                            </div>
                    </form>                    
                        </div>
          </div><!-- /.modal-content -->          
        </div><!-- /.modal-dialog -->        
      </div><!-- /.modal -->      
    
    <?php include "templates/footer.php";