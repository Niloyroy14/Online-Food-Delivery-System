<!DOCTYPE html>
<html>
<head>
<title>Product Insert page</title>
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

<div class="container-fluid" id ="banner"> <br><br><br><br><br><br>
  <div class="col-md-6 search"><br>
       <h2 style="text-align: center;">Insert Product</h2><br>
    <?php $un=$this->session->userdata('userid');?>

    <?=form_open('admin/insert_product/store'); ?>
    
     <table class="table">
     	<tr>
     		<td>Enter Product Name:</td>
     		<td><?=form_input(['name'=>'productname','placeholder'=>'Enter Product Name','class'=>'form-control','value'=>set_value('productname')]);?></td>
        <td><?=form_error('productname');?></td>
     	</tr>
     	<tr>
     		<td>Enter Product Price:</td>
     		<td><?=form_input(['name'=>'price','placeholder'=>'Enter Product Price','class'=>'form-control']);?></td>
        <td><?=form_error('price');?></td>
     	</tr>
     <tr>
       <td><?=form_submit(['name'=>'submit','value'=>'Insert Product','class'=>'btn btn-primary']); ?></td>
     </tr>
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
