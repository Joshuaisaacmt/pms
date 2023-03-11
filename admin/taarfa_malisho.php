<?php 
    include "templates/top.php";
    include "templates/navbar.php"; 
    include "action.php";
?>

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
              <li class="breadcrumb-item active">Taarifa za Malisho</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="table-responsive">
              <div class="col-md-2" style="float:right;">
                  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-sm">
                    Ongeza
                  </button>
                </div>
                  <table class="table table-striped table-sm">
                    <thead>
                      <tr>
                        <th>Tarehe </th>
                        <th>Aina ya Chakula</th>
                        <th>Aina ya Kampuni </th>
                        <th>Idadi ya Kuku </th>
                        <th>Jumla ya kilo</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        
                      </tr>
                    </tbody>
                    <table>
            </div>
         </div>
       </div>




<?php  include "templates/footer.php"; ?>