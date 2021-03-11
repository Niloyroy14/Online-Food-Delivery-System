<?php

class HomeController extends CI_Controller{

 public function index(){

   $this->load->view('home');

 }


 public function open_about(){

   $this->load->view('about');
 }


 public function open_product(){

   $product=$this->UserModel->select_productdata();
   $this->load->view('product',['products'=>$product]);

 }


 public function open_contact(){

   $this->load->view('contact');

 }





  public function productsearch(){
       
       $this->form_validation->set_rules('productsearch','Food Name','required');
       if($this->form_validation->run()){

       $productname = $this->input->post('productsearch');
       $searchproduct = $this->UserModel->productsearch($productname);
        
          if($searchproduct){
       	     $this->load->view('home',['sproduct'=>$searchproduct]);
           }

           else{
         	
         	 $this->load->view('home',['error'=>'Product Not Found']);

             }

          }

       else{
       	     $this->load->view('home');
        }

	  }

   
  


  
   public function product_book($id){
       
    $bookproduct = $this->UserModel->product_book($id);
    $this->load->view('user_product_book',['bproduct'=>$bookproduct]);

    }





    public function user_confirm_booking(){

 	  $this->form_validation->set_rules('product_name','Product Name','required');
 	  $this->form_validation->set_rules('price','Product Price','required');
 	  $this->form_validation->set_rules('user_name','User Name','required');
 	  $this->form_validation->set_rules('address','Address','required');
 	  $this->form_validation->set_rules('city','City Name','required');
 	  $this->form_validation->set_rules('mobile_no','Mobile No','required');

       if($this->form_validation->run()){

       $data=$this->input->post();
		unset($data['submit']);

		$insertbooking =$this->UserModel->insert_user_booking($data);

        
          if($insertbooking){
       	     $this->load->view('user_product_book',['success'=>'Your Booking is Completed']);
           }

           else{
         	
         	 $this->load->view('user_product_book',['error'=>'Your Booking is Not Completed']);
         }

          }

       else{
       	    echo  validation_errors();
        }
 }



   
}
 ?>
