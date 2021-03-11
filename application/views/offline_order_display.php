<!DOCTYPE html>
<html>
<head>
<title>Offline Oredr display page</title>
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
    <h2 style="text-align: center;">Offline Oredr Display</h2><br>
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
          <th><font color="blue"><center>Product Name</center></font></th>
          <th><font color="blue"><center>Price</center></font></th>
          <th><font color="blue"><center>Customer Name</center></font></th>
          <th><font color="blue"><center>Email</center></font></th>
          <th><font color="blue"><center>Adress</center></font></th>
          <th><font color="blue"><center>City</center></font></th>
          <th><font color="blue"><center>Mobile No</center></font></th>
          <th><font color="blue"><center>Pin Code</center></font></th>
          <th><font color="blue"><center>Edit</center></font></th>
          <th><font color="blue"><center>Delete</center></font></th>
     	</tr>
         <?php

           if(isset($orders_data)){
           	foreach ($orders_data as $data) {
         ?>
     	<tr>
     		<td><center><?=$data->product_name;?></center></td>
     		<td><center><?=$data->price;?></center></td>
     		<td><center><?=$data->customer_name;?></center></td>
     		<td><center><?=$data->email?></center></td>
     		<td><center><?=$data->address;?></center></td>
     		<td><center><?=$data->city;?></center></td>
     		<td><center><?=$data->mobile_no;?></center></td>
     		<td><center><?=$data->pincode;?></center></td>	
        <td>
         <center><b><a href="<?=base_url()?>admin/offline_order/edit/<?php echo $data->id;?>" class="btn btn-warning">Edit</a></b></center>
        </td>

        <td> 
          <center><b><a href="<?=base_url()?>admin/offline_order/delete/<?php echo $data->id;?>" class="btn btn-danger">Delete</a></b></center>
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
<!
