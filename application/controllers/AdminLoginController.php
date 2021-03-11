<?php

class AdminLoginController extends CI_Controller{




 public function index(){

   $this->load->view('admin_home');
  
 }

public function login(){

  $this->form_validation->set_rules('username','Username','required');
  $this->form_validation->set_rules('password','Password','required');

  if($this->form_validation->run()){

    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $data = $this->AdminLoginModel->login($username,$password);
    
   
    if($data){
    	$this->session->set_userdata('userid',$username);
    	return redirect('admin/index');
    }

    else{
      $this->session->set_flashdata('error','Your Email Or Password Invalid');
      return redirect('admin/login');

    }


  }

  else{
       
       $this->load->view('admin_login');
     }
 
 }



   public function logout(){

    return redirect('admin/login');
    
   }
 
}


?>