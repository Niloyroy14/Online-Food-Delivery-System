<!DOCTYPE html>
<html>
<head>
<title>Admin login page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="<?= base_url('assests/css/bootstrap.css');?>" >
<link rel="stylesheet" href="<?= base_url('assests/css/mystyle.css');?>" >

</head>
 <body>


<!--header + navbar section-->

<div class="container-fluid mycon">
  <?php include('admin_header.php');?>
</div>


<!--banner section-->

<div class="container-fluid" id ="banner"> <br><br><br><br><br><br><br>
  <div class="col-md-6 search"><br><br>
    <h2 style="text-align: center;">Admin Login</h2><br>

     <?php 
     $error = $this->session->flashdata('error');
   
     if($error){
      include('message.php');
      $this->session->unset_userdata('error');
     }
     
    ?>

    <?=form_open('admin/login'); ?>
    
   <table class="table">
    <tr>
      <td>Enter User Name</td>
       <td><?=form_input(['name'=>'username','placeholder'=>'Enter User Name','class'=>'form-control','value'=>set_value('username')]);?></td>
       <td><?=form_error('username');?></td>
    </tr>
     <tr>
       <td>Enter Password</td>
       <td><?=form_password(['name'=>'password','placeholder'=>'Enter password','class'=>'form-control','value'=>set_value('password')]);?></td>
       <td><?=form_error('password');?></td>
     </tr>
     <tr>
       <td><?=form_submit(['name'=>'submit','value'=>'Login','class'=>'btn btn-primary']); ?></td>
     </tr>
   </table><br><br>
  </div>
</div>


<!--footer section-->
<div class="container-fluid myfooter">
  
  <p>Copyright@Online Food Delivery</p>
 
</div>




  <script  type="text/javascript" src="<?= base_url('assests/js/bootstrap.js');?>"></script>
  <script  type="text/javascript" src="<?= base_url('assests/js/jquery-3.5.1.min.js');?>"></script>
 </body>
</html>
<!
