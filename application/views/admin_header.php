  <div class="row">
  <div class="col-md-4 " >
    <h3 class="mt-3">Online Food Delivery</h3>
    <!--<img src="assests/image/logoimage.svg">-->
  </div>

  <div class="col-md-8 navbar">
  <ul>
    <li><a href="<?=base_url()?>admin/index">Home</a></li>

    <li id="product"> <b><a> Product</a></b>
     <div id="d1">
       <p><a href="<?=base_url()?>admin/insert_product">Insert Product</a></p>
       <p><a href="<?=base_url()?>admin/display_product">Display Product</a></p>
     </div>
    </li>

    <li id="order"> <b><a>Order</a></b> 
      <div id="d2">
        <p><a href="<?=base_url()?>admin/offline_order">Offline Order</a></p>
        <p><a href="<?=base_url()?>admin/offline_order_display">Offline Order Display</a></p>
        <p><a href="<?=base_url()?>admin/online_order_display">Online Order Display</a></p>
      </div>
    </li>
 

    <?php 
    $un=$this->session->userdata('userid');
    if($un!=''){
      ?>
    <li><a href="<?=base_url()?>admin/logout">Logout</a> </li>


 
    <?php
    $this->session->unset_userdata('userid');
  }
    else{
      ?>
    <li><a href="<?=base_url()?>admin/login">Login</a> </li>
    <?php
    }
    ?>
  </ul>
  </div>

</div>




<script type="text/javascript">
  $('document').ready(function(){

    $('#product').click(function(){
      $('#d2').hide();
      $('#d1').slideToggle();
    });

    $('#order').click(function(){
      $('#d1').hide();
      $('#d2').slideToggle();
    });
  });
  
</script>