<?php 
    include "templates/top.php";
    include "templates/navbar.php";     include "action.php";
?>    

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content" style="padding-top:10px;">
      <div class="container-fluid">
        <div class="container">
            <div class="card card-primary">
                <h3 class="text-center bg-dark"> <b> TAARIFA BINAFSI </b> </h3>
                    <form method="POST">
                        <div class="card-body" >
                            <div class="profile_icon" style="position: absolute; left:80%; padding-bottom:5px;">
                                <span><i><b>Profile Picture </b></i></span>
                                <img src="<?php echo $_SESSION['profile']; ?>" 
                                    style=" width:170px; height:150px; border-color: gray;">
                            </div>
                            <div class="form-group" style="width:50%; float:left;">
                                <label> Jina La Kwanza </label>
                                <input type="text"  class="form-control" style="width:70%;"value="<?php echo $fname ; ?>" readonly>
                            </div>
                            <div class="form-group" style="width:50%; float:left;">
                                <label> Jina la Mwisho </label>
                                <input type="text"  class="form-control"  style="width:60%;" value="<?php echo $lname ; ?>" readonly>
                            </div><br>
                            <div class="form-group" style="width:50%; float:left;">
                                <label> Namba ya Simu </label>
                                <input type="text"  class="form-control" style="width:70%;" value="<?php echo "0".$mobile ; ?>" readonly>
                            </div>
                            <div class="form-group" style="width:50%; float:left;">
                                <label> Email </label>
                                <input type="text"  class="form-control" style="width:60%;" value="<?php echo $email ; ?>" readonly>
                            </div>
                            <div class="form-group"  style="width:50%; float:left;">
                                <label> Role</label>
                                <input type="text"  class="form-control"  style="width:70%;"value="<?php echo $role; ?>" readonly>
                            </div>
                            <div class="form-group"  style="width:50%; float:left;">
                                <label> Sehemu Ya Makazi</label>
                                <input type="text"  class="form-control"  style="width:60%;"value="<?php echo $home_place; ?>" readonly>
                            </div>
                            <!-- <div class="form-group"  style="width:50%; float:left;">
                                <label> Tarehe ya Usajili</label>
                                <input type="text"  class="form-control"  style="width:70%;"value="<?php echo $tarh_arrival; ; ?>" readonly>
                            </div>
                            <div class="form-group"  style="width:50%; float:left;">
                                <label> Tarehe ya Kuuza</label>
                                <input type="text"  class="form-control"  style="width:60%;"value="<?php echo $tarh_depart; ; ?>" readonly>
                            </div> -->
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer" style="float:center">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
                          Badilisha
                        </button>
                            
                        </div>
                    </form>
                </div>

                <!-- mODAL YA kUUPDATE DTA -->
                <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"> TAARIFA BINAFSI </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    <form method="POST" action="">
                        <div class="card-body" >
                            <div class="form-group" style="width:50%; float:left;">
                                <label> Jina La Kwanza </label>
                                <input type="text" class="form-control" name="fname"
                                      style="width:90%;"value="<?php echo $fname ; ?>" >
                            </div>
                            <div class="form-group" style="width:50%; float:left;">
                                <label> Jina la Mwisho </label>
                                <input type="text"  class="form-control"  name="lname" 
                                      style="width:90%;" value="<?php echo $lname ; ?>" >
                            </div><br>
                            <div class="form-group" style="width:50%; float:left;">
                                <label> Namba ya Simu </label>
                                <input type="number"  class="form-control"  name="mobile"
                                      style="width:90%;" value="<?php echo "0".$mobile ; ?>" >
                            </div>
                            <div class="form-group" style="width:50%; float:left;">
                                <label> Email </label>
                                <input type="email"  class="form-control"  name="email"
                                       style="width:90%;" value="<?php echo $email ; ?>" >
                            </div>
                            
                            <div class="form-group"  style="width:50%; float:left;">
                                <label>ROLE</label>
                                <input type="text"  class="form-control"  name="product_qnty"
                                         style="width:90%;" value="<?php echo $role; ?>" READONLY>
                            </div>
                            <div class="form-group"  style="width:50%; float:left;">
                                <label>Sehemu ya Makazi </label>
                                <input type="text"  class="form-control"   name="tarh_arrival"
                                         style="width:90%;" value="<?php echo $home_place; ?>" >
                            </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Funga</button>
              <button type="submit" name="update" class="btn btn-primary">Nimemaliza</button>                    
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    


<?php  include "templates/footer.php"; ?>