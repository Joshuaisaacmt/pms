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
              <li class="breadcrumb-item active">Taarifa za Madawa</li>
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
                  <a href="soma-mail.php" class="btn btn-primary btn-block mb-3">     Soma Ujumbe</a>
              </div>
                <table class="table table-striped table-sm">
                  <thead>
                    <tr>
                       <th>Miaka wanaowezapata</th>
                      <th>Picha ya gonjwa </th>
                      <th>Dalili ya gonjwa </th>
                      <th>Matibabu ya Gonjwa</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td> 2022-06-01 </td>
                      <td> 2022-06-01 </td>
                      <td> 2022-06-01 </td>
                      <td> 2022-06-01 </td>
                      <!-- <td> 2022-06-01 </td> -->
                    </tr>
                  </tbody>
                  <table>
          </div>
         </div>
       </div>




<?php  include "templates/footer.php"; ?>