<!DOCTYPE html>
<html>
<head>
<title> Edit Product page</title>
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
  <div class="col-md-6 search">
       <h2 style="text-align:center;">Edit Product</h2>

       <?php
         if(isset($pr)){
       ?>

 

    <?=form_open('admin/update_product/'.$pr->id);?>
     
     <table class="table">
      <tr>
        <td>Enter Product Name:</td>
        <td><?=form_input(['name'=>'productname','value'=>$pr->productname,'class'=>'form-control']);?></td>
      </tr>

      <tr>
        <td>Enter Product Price:</td>
        <td><?=form_input(['name'=>'price','value'=>$pr->price,'class'=>'form-control']);?></td>
      </tr>
     <tr>
       <td><?=form_submit(['name'=>'submit','value'=>'Update Product','class'=>'btn btn-primary']); ?></td>
     </tr>
     </table>

     <?php
   }
     ?>
  </div>
</div>


<!--footer section-->
<div class="container-fluid myfooter">
  
  <p>Copyright@Online Food Delivery</p>
 
</div>




 
 </body>
</html>

