<?php

/**
 * 
 */
class AdminHomeController extends CI_Controller
{
	
	public function index(){
		
		$this->load->view('admin_login');
	}


	public function open_insert_product(){

		$this->load->view('product_insert');
	}

   public function open_display_product(){

   	    $product=$this->AdminProductModel->select_productdata();

		$this->load->view('product_display',['products'=>$product]);
	}


   public function open_offline_order(){

		$this->load->view('offline_order');
	}


   public function open_offline_order_display(){

   	     $offline_order = $this->AdminProductModel->select_offline_order_data();
         $this->load->view('offline_order_display',['orders_data'=>$offline_order]);
	}

  public function open_online_order_display(){
        $online_order = $this->AdminProductModel->select_online_order_data();
		$this->load->view('online_order_display',['orders_data'=>$online_order]);
	}







/*For Product */


	public function insert_product(){

    $this->form_validation->set_rules('productname','productname','required');
    $this->form_validation->set_rules('price','Price','required');

   if($this->form_validation->run()){

		$data=$this->input->post();
		unset($data['submit']);
		$insert=$this->AdminProductModel->insert_product($data);

	  	if($insert){

        $this->session->set_flashdata('success','Product Inserted Succesfully');
        return redirect('admin/display_product');
	  	}

		  else{
         $this->session->set_flashdata('error','Product Not Inserted');
         return redirect('admin/display_product');
		    }
    
	  }

    else{

          $this->load->view('product_insert');
        }

  }





     public function edit_product($id){
 
       $editproduct = $this->AdminProductModel->edit_product($id);

       $this->load->view('edit_product',['pr'=>$editproduct]);

      }




    public function update_product($id){
       
       $data=$this->input->post();
  
       unset($data['submit']);

      $update=$this->AdminProductModel->update_product($id,$data);

      if($update){

        $this->session->set_flashdata('success','Product Updated Succesfully');
        return redirect('admin/display_product');
     
    }

    else{

     $this->session->set_flashdata('error','Product Not Updated');
     return redirect('admin/display_product');

    }
      
      }




   
     public function delete_product($id){

     $delete=$this->AdminProductModel->delete_product($id);
      if($delete){
         $this->session->set_flashdata('success','Product Deleted Succesfully');
         return redirect('admin/display_product');
       }
     }







/*For Offline Order */


  public function productsearch(){
       
       $this->form_validation->set_rules('productsearch','Product Name','required');
       if($this->form_validation->run()){

       $productname = $this->input->post('productsearch');
       $searchproduct = $this->AdminProductModel->productsearch($productname);
        
          if($searchproduct){
       	     $this->load->view('offline_order',['sproduct'=>$searchproduct]);
           }

           else{
         	
         	 $this->load->view('offline_order',['error'=>'Product Not Found']);
         }

          }

       else{
       	     $this->load->view('offline_order');
        }

	  }






 public function offline_product_book($id){
       
    $bookproduct = $this->AdminProductModel->offline_product_book($id);
    $this->load->view('offline_product_book',['bproduct'=>$bookproduct]);

 }
	



/*offline_confirm_booking*/ 

 public function offline_confirm_booking(){

 	  $this->form_validation->set_rules('product_name','Product Name','required');
 	  $this->form_validation->set_rules('price','Product Price','required');
 	  $this->form_validation->set_rules('customer_name','Customer Name','required');
 	  $this->form_validation->set_rules('address','Customer Address','required');
 	  $this->form_validation->set_rules('city','City Name','required');
 	  $this->form_validation->set_rules('pincode','Pin Code','required');
 	  $this->form_validation->set_rules('mobile_no','Mobile No','required');
 	  $this->form_validation->set_rules('email',' Valid Email','required');

       if($this->form_validation->run()){

     /*  $productname  = $this->input->post('product_name');
       $price        = $this->input->post('price');
       $customername = $this->input->post('customer_name');
       $address      = $this->input->post('address');
       $city         = $this->input->post('city');
       $pincode      = $this->input->post('pincode');
       $mobileno     = $this->input->post('mobile_no');
       $email        = $this->input->post('email');
       */

       $data=$this->input->post();
		    unset($data['submit']);
		    $insertbooking =$this->AdminProductModel->insert_offline_booking($data);

        
          if($insertbooking){
       	     $this->load->view('offline_product_book',['success'=>'Your Booking is Completed']);
           }

           else{
         	
         	 $this->load->view('offline_product_book',['error'=>'Your Booking is Not Completed']);
         }

          }

       else{
       	    echo  validation_errors();
        }
 }







  public function edit_offline_order($id){

   $editorder = $this->AdminProductModel->edit_offline_order($id);

   $this->load->view('edit_offline_order',['bproduct'=>$editorder]);

   }





    public function update_offline_order($id){
       
       $data=$this->input->post();
  
       unset($data['submit']);

      $update=$this->AdminProductModel->update_offline_order($id,$data);

      if($update){

        $this->session->set_flashdata('success','Order Updated Succesfully');
        return redirect('admin/offline_order_display');
     
       }

       else{

        $this->session->set_flashdata('error','Order Not Updated');
        return redirect('admin/offline_order_display');
    
        }
      
      }




     
   public function delete_offline_order($id){

     $delete=$this->AdminProductModel->delete_offline_order($id);
     
     if( $delete){

      $this->session->set_flashdata('success','Order Deleted Succesfully');
      return redirect('admin/offline_order_display');

     }

     else{

      $this->session->set_flashdata('error','Order Not Updated');
      return redirect('admin/offline_order_display');

     }

   }







   /* For Online Oreder Edit Delete*/ 


   public function edit_online_order($id){

   $editorder = $this->AdminProductModel->edit_online_order($id);

   $this->load->view('edit_online_order',['bproduct'=>$editorder]);

   }




    public function update_online_order($id){
       
       $data=$this->input->post();
  
       unset($data['submit']);

      $update=$this->AdminProductModel->update_online_order($id,$data);

      if($update){

        $this->session->set_flashdata('success','Order Updated Succesfully');
        return redirect('admin/online_order_display');
     
    }

    else{

       $this->session->set_flashdata('error','Order Not Updated');
        return redirect('admin/online_order_display');
    }
      
  
    }




     
     public function delete_online_order($id){

     $delete=$this->AdminProductModel->delete_online_order($id);
     
      if( $delete){

      $this->session->set_flashdata('success','Order Deleted Succesfully');
      return redirect('admin/online_order_display');

     }

     else{

      $this->session->set_flashdata('error','Order Not Updated');
      return redirect('admin/online_order_display');

     }

   }



}
?>