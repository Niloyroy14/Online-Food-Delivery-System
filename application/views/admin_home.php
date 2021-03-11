<!DOCTYPE html>
<html>
<head>
<title>Admin Home page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="<?= base_url('assests/css/bootstrap.css');?>" >
<link rel="stylesheet" href="<?= base_url('assests/css/mystyle.css');?>" >

 <script  type="text/javascript" src="<?= base_url('assests/js/bootstrap.js');?>"></script>
  <script  type="text/javascript" src="<?= base_url('assests/js/jquery-3.5.1.min.js');?>"></script>

</head>
 <body>


<!--header + navbar section-->

<div class="container-fluid mycon">
  <?php include('admin_header.php');?>
</div>


<!--banner section-->

<div class="container-fluid" id ="banner"> <br><br><br><br><br><br><br>
  <div class="col-md-6 search"><br><br>
    <h2 style="text-align: center;">Admin Dashboard</h2><br>
    <?php $un=$this->session->userdata('userid');?>
   
   <table class="table">
      <center><h1>Welcome To Admin <?=$un?> </h1></center><br><br>
     <h2><center> <a href="<?=base_url()?>index">Visit Main Site</a></center></h2>
   </table><br><br>
  </div>
</div>


<!--footer section-->
<div class="container-fluid myfooter">
  
  <p>Copyright@Online Food Delivery</p>
 
</div>




 
 </body>
</html>
<!
