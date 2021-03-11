<!DOCTYPE html>
<html>
<head>
<title>product page </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="<?= base_url('assests/css/bootstrap.css');?>" >
<link rel="stylesheet" href="<?= base_url('assests/css/mystyle.css');?>" >

</head>
 <body>


<!--header + navbar section-->

<div class="container-fluid mycon">
  <?php include('user_header.php');?>
</div>


<!--banner section-->

<div class="container-fluid" id ="banner"> <br><br><br>
  <div class="col-md-6 search"><br>
    <h2 style="text-align: center;">All Product</h2><br>

    <?php $un=$this->session->userdata('userid');?>

     <table class="table">
      <tr>
        <td style="color:red;"><center><b>Product Name</b></center></td>
        <td style="color:red;"><center><b>Price</center></b></td>
        <td style="color:red;"><center><b>Action</center></b></td>
      </tr>
        <?php
      if(isset($products)){
        foreach ($products as $pr) {
          
        ?>
      <tr>
        <td><center><b><?= $pr->productname;?></b></center></td>
        <td><center><b><?= $pr->price;?> TK</b></center></td>
        <td><center><font><?=anchor('HomeController/product_book/'.$pr->id,'Book Now',['class'=>'btn btn-primary']);?></font></center></td>
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

