<?php 
    include "templates/top.php";
    include "templates/navbar.php"; 
    include "action.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content"> <!-- Main content -->
            <div class="container-fluid"> 
                <div class="container text-dark card"  style="position:relative; top:20px;  width:600px; "><br>
                    <h1 class="text-center bg-dark"> <b> MAGONJWA </b> </h1>
                        <div class="row">
                            <form method="POST" autocomplete="off" action="status_action.php">
                                <div class="card-body" >
                                    <div class="form-group" style="width:100%; float:left;">
                                        <label> Chagua Mtaalam</label>
                                        <select class="form-control select2 select2-hidden-accessible" name="product_type" style="width: 100%;" 
                                                    aria-hidden="true">
                                                <option  value="Brolier">JOSHUA</option>
                                                <option value="Layering">LAYERING</option>
                                                <option value="Chotara"> CHOTARA</option>
                                        </select>      
                                    </div>
                                    <div class="form-group" style="width:100%; float:left;">
                                        <label> MAelezo kuhusu Ugonjwa </label>
                                        <textarea class="form-control" name="product_qnty" style="width:100%; color:dark;"></textarea>
                                    </div>
                                    <div class="form-group" style="width:100%; float:left;">
                                        <label>Amabatanisha Picha
                                        <br><i>Picha inayoonyesha kinyesi cha kuku </i> </label>
                                        <input type="file" class="form-control" name="product_arrival" style="width:100%; color:dark;">
                                    </div>
                                    
                                    <div class="modal-footer text-center bg-dark" height="20px" >
                                        <button type="submit" name="submit" class="btn btn-primary">Tuma</button> 
                                    </div>
                                </div>                               
                            </form>
                        </div>  
                </div>  
            </div>  
        </section>


<?php  include "templates/footer.php"; ?>