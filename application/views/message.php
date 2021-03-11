
<!DOCTYPE html>
<html>
<head>
<title>Offine Order page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="<?= base_url('assests/css/bootstrap.css');?>" >
<link rel="stylesheet" href="<?= base_url('assests/css/mystyle.css');?>" >

 <script  type="text/javascript" src="<?= base_url('assests/js/bootstrap.js');?>"></script>
  <script  type="text/javascript" src="<?= base_url('assests/js/jquery-3.5.1.min.js');?>"></script>

</head>
 <body>

<?php 

if(isset($error)){

?>

<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">

       <div class="alert alert-warning">

 	      <p><center><?=$error;?></center></p>

       </div>
      </div>
    </div>
 </div>

<?php
}
 ?>


<?php 

if(isset($success)){

?>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">

       <div class="alert alert-success">

 	      <p><center><?=$success;?></center></p>

       </div>
      </div>
    </div>
 </div>

<?php

}

?>



 
 </body>
</html>