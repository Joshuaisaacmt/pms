<?php  
        require('connection.php');
        session_start();

        $user_id = $_SESSION["user_id"];
        $sql = "SELECT * FROM product_info WHERE user_id = '$user_id'";
        $result = mysqli_query($connection,$sql);
        $display = mysqli_num_rows($result);
      ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">



<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>HATUA ZA KUFUATA</title>
<link href="styles/demo_style.css" rel="stylesheet" type="text/css">

<link href="styles/smart_wizard_vertical.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-2.0.0.min.js"></script>
<script type="text/javascript" src="js/jquery.smartWizard.js"></script>

<script type="text/javascript">
   
    $(document).ready(function(){
    	// Smart Wizard	
  		$('#wizard').smartWizard({transitionEffect:'slide'});
     
		});
</script>

<style type="text/css">
  a {
    color: red;
    text-decoration: none;

  }
  body {
  background-image: url('../../dist/img/kuku1.jpg');
  background-size: 100%;
}

  .wiz1{
      padding:10px;
       

  }
</style>

</head>
    <body style="background-image: url('../dist/img/layout2.jpeg');  background-size: 100%;">
    <table align="center" border="0" cellpadding="0" cellspacing="0">
    <tr><td>           

<!-- Tabs -->
  		<div id="wizard" class="swMain">
          <center><font color="white"><h3><?php echo "UFUGAJI WA KUKU" ?></h3></font></center>
  			<ul>
  				<li><a href="#step-1">
                <label class="stepNumber">1</label>
                <span class="stepDesc">
                   Hatua ya 1<br />
                   <small>Maelezo ya Hatua ya 1</small>
                </span>
            </a></li>
  				<li><a href="#step-2">
                <label class="stepNumber">2</label>
                <span class="stepDesc">
                   Hatua ya 2<br />
                   <small>Maelezo ya Hatua ya 2</small>
                </span>
            </a></li>
  				<li><a href="#step-3">
                <label class="stepNumber">3</label>
                <span class="stepDesc">
                   Hatua ya 3<br />
                   <small>Maelezo ya Hatua ya 3</small>
                </span>                   
             </a></li>
  				<li><a href="#step-4">
                <label class="stepNumber">4</label>
                <span class="stepDesc">
                   Hatua ya 4<br />
                   <small>Maelezo ya Hatua ya 4</small>
                </span>                   
            </a></li>
  			</ul>
        <?php
          if ($display > 0) {
            while ($rows = mysqli_fetch_assoc($result)) {

              if ($rows['product_type'] == 'brolier') {
        ?>   
        <!-- Kuunda mazingira ya Kuku wa Brolieer -->
  			<div id="step-1">	
            <h2 class="StepTitle">HATUA YA KWANZA</h2>
            <p><h3>Cage system: </h3> The cage system of rearing birds has been considered as a super 
                intensive system providing floor area of 450-525 sq.cm. (0.6-0.75 sq.feet) per bird.  
                In cage the birds are kept in one, two or three per cage, arranged in single or double 
                or triple rows.</p>

            <p>
              <a href="#" >
                <img src="../dist/img/activity/cage.jpg" alt="Cage System" width="350px">
              </a>
            </p>

            <p><h3>Cage system: </h3> The cage system of rearing birds has been considered as a super 
                intensive system providing floor area of 450-525 sq.cm. (0.6-0.75 sq.feet) per bird.  
                In cage the birds are kept in one, two or three per cage, arranged in single or double 
                or triple rows.</p>
            <p>
              <a href="#" >
                <img src="../dist/img/activity/Cage fatigue-2.jpg" alt="Cage System" width="350px">
              </a>
            </p>			
        </div>
  			<div id="step-2">
            <h2 class="StepTitle">HATUA YA PILI</h2>	
            <p>             
          
            </p>            
        </div>                      
  			<div id="step-3">
          <h2 class="StepTitle">HATUA YA TATU</h2>	
            
              <p>
               
            
            </p>               				          
        </div>
  			<div id="step-4">
            <h2 class="StepTitle">HATUA YA NNE</h2>	
              <p>
            </p> 
            </p>   

        </div>

  		</div>
<!-- End SmartWizard Content --> 

      <?php
            }
            elseif ($rows['product_type'] == 'layering') {
              # code...
      ?>
      <div id="step-1">	
            <h2 class="StepTitle">HATUA YA KWANZA</h2>
            <!-- <ul type="disk">
  				    <li></li>
  				    <li></li>
            </ul> -->
            <p>               
            </p>          			
        </div>
  			<div id="step-2">
            <h2 class="StepTitle">HATUA YA PILI</h2>	
            <p>             
          kkkkkkk
            </p>            
        </div>                      
  			<div id="step-3">
          <h2 class="StepTitle">HATUA YA TATU</h2>	
            
              <p>
               
            
            </p>               				          
        </div>
  			<div id="step-4">
            <h2 class="StepTitle">HATUA YA NNE</h2>	
              <p>
            </p> 
            </p>   

        </div>

  		</div>
<!-- End SmartWizard Content --> 
      <?php
            }
            
          }
      }
      ?>
  		
</td></tr>
</table>
</body>
</html>
