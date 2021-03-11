<!DOCTYPE html>
<html>
<head>
<title>home page</title>
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
  <?php include('user_header.php');?>
</div>


<!--banner section-->

<div class="container-fluid" id ="banner"> <br><br><br><br><br><br><br><br><br>
  <div class="col-md-6 search"><br><br>
    <?=form_open('product/search')?>

   <table class="table">
     <tr>
      <td><center>Enter Food Name:</center></td>
       <td><center><input type="text" name="productsearch" placeholder="Enter Food Name" class="form-control"></center></td>
       <td><?=form_error('productsearch');?></td>

       <td><input type="submit" name="sub" value="Search" class="btn btn-success"></td>
     </tr>
   </table>

   <br>

    <table class="table">
      <?php
        
        if(isset($sproduct)){

      ?>

      <tr>
        <td><center><font color="blue"><b>Product Name</b></font></center></td>
        <td><center><font color="blue"><b>Price</b></font></center></td>
        <td><center><font color="blue"><b>Book Now</b></font></center></td>
      </tr>

      <tr>
        <td><center><font><?=$sproduct->productname;?></font></center></td>
        <td><center><font><?=$sproduct->price;?></font></center></td>
        <td>
        
        <center><b><a href="<?=base_url()?>product/book/<?php echo $sproduct->id;?>" class="btn btn-primary">Book Now</a></b></center>

        </td>
      </tr>
        
        <?php

         } 
        
        ?>
    </table>
    
    <?php
     if(isset($error)){
    
       include('message.php');
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
<!
