<!DOCTYPE html>
<html>
<head>
<title>Edit Online Order page</title>
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

<div class="container-fluid" id ="banner"> <br><br><br>
  <div class="col-md-6 search"><br>
    <h2 style="text-align: center;">Edit online Order page</h2><br>
   
     <?php
        
        if(isset($bproduct)){

      ?> 

    <?=form_open("AdminHomeController/update_online_order/{$bproduct->id}"); ?>

    <table class="table">

    	 <tr>
        <td><b>Product Name:</b></td>
        <td><?=form_input(['name'=>'product_name','value'=>$bproduct->product_name,'class'=>'form-control']);?></td>

        <td><b>Product Price:</b></td>
        <td><?=form_input(['name'=>'price','value'=>$bproduct->price,'class'=>'form-control']);?></td>
      </tr>

       <tr>
        <td><b>User Name:</b></td>
        <td><?=form_input(['name'=>'user_name','value'=>$bproduct->user_name,'class'=>'form-control']);?></td>

        <td><b>Enter Address:</b></td>
        <td><?=form_input(['name'=>'address','value'=>$bproduct->address,'class'=>'form-control']);?></td>
      </tr>

      <tr>
        <td><b>Enter City:</b></td>
        <td><?=form_input(['name'=>'city','value'=>$bproduct->city,'class'=>'form-control']);?></td>

        <td><b>Enter Mobile No:</b></td>
        <td><?=form_input(['name'=>'mobile_no','value'=>$bproduct->mobile_no,'class'=>'form-control']);?></td>

     </tr>

      <tr>
        <td><?=form_submit(['name'=>'submit','value'=>'Update Order','class'=>'btn btn-primary']);?></td>
      </tr>

      <?php
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

