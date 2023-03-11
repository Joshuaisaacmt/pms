<?php
    session_start();
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
      header("location: ../index.php");
      exit;
    }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PMS | Compose Message</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Gonjwa Jipya</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" >
                  <div class="form-group ">
                    <select class="form-group" name="receiver" style="width:100%; padding: 10px;">
                      <option value="Joshua" ></option>
                      <option value="Joshua" select ="selected"> JOSHUA</option>
                    </select>
                    <!-- <input class="form-control"  name="receiver" placeholder="To:"> -->
                  </div>
                  <div class="form-group">
                    <select class="form-group" name="sms_subject" style="width:100%; padding: 10px;">
                      <option value="Medical Support" select ="selected"> Msaada wa Malisho </option>
                      <option value="Medical Support"> Msaada wa Madawa </option>
                      <option value="Medical Support"> Msaada wa Magonjwa </option>
                    </select>
                    <!-- <input class="form-control" name="sms_subject" placeholder="Subject:"> -->
                  </div>
                  <div class="form-group">
                      <textarea id="compose-textarea" class="form-control" name ="sms_content"style="height: 200px">                      
                      </textarea>
                  </div>
                  <div class="card-footer">
                    <div class="float-right">
                      <button type="submit" name="submit" class="btn btn-primary"><i class="far fa-envelope"></i> TUMA</button>
                    </div>
                  </div>
                  </form>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote()
  })
</script>
</body>
</html>
