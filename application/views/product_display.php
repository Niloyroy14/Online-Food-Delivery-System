<!DOCTYPE html>
<html>
<head>
<title>Product Display page</title>
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
  <div class="col-md-8 search"><br>
    <h2 style="text-align: center;">Display Product </h2><br>

    <?php $un=$this->session->userdata('userid');?>

     <?php 

       $success = $this->session->flashdata('success');
   
     if($success){
      include('message.php');
      $this->session->unset_userdata('success');
     }
     ?>

   <?php
   
      $error = $this->session->flashdata('error');

     if($error){
       include('message.php');
       $this->session->unset_userdata('error');
     }
   ?>
     
     
     <table class="table">
     	<tr>
     		<td style="color:red;"><center><b>Product Name</b></center></td>
     		<td style="color:red;"><center><b>Price</b></center></td>
        <td style="color:red;"><center><b>Edit</b></center></td>
        <td style="color:red;"><center><b>Delete</b></center></td>
     </tr>
        <?php
     	if(isset($products)){
     		foreach ($products as $pr) {
     			
        ?>
     	<tr>
     		<td><center><b><?= $pr->productname;?></b></center></td>
     		<td><center><b><?= $pr->price;?> TK</b></center></td>

        <td>
          <!--<center><b><?=anchor('AdminHomeController/edit_product/'.$pr->id,'Edit',['class'=>'btn btn-warning']);?></b></center>-->
         
         <center><b><a href="<?=base_url()?>admin/edit_product/<?php echo $pr->id;?>" class="btn btn-warning">Edit</a></b></center>
        </td>

         <!--<center><b><?=anchor('AdminHomeController/delete_product/'.$pr->id,'Delete',['class'=>'btn btn-danger']);?></b></center>
         -->
        <td>
          <center><b><a href="<?=base_url()?>admin/delete_product/<?php echo $pr->id;?>" class="btn btn-danger">Delete</a></b></center>
        </td>
     	</tr>

     	<?php

          }

      }
     	?>

     </table>

  </div>
</div>






<!--footer section-->
<div class="container-fluid myfooter">
  <p>Copyright@Online Food Delivery</p>
</div>




 
 </body>
</html>

