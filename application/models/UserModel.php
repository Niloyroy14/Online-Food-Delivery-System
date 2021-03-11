<?php


class UserModel extends CI_Model
{



  public function productsearch($productname){

   	 $query=$this->db->select(['id','productname','price'])->from('product')->like('productname',$productname)->get();
     return  $query->row();
   }


  public function product_book($id){
   
    $query=$this->db->select(['id','productname','price'])->from('product')->where('id',$id)->get();  

     return  $query->row();
   }


  public function insert_user_booking($data){

		return $this->db->insert('online_order',$data);
	}



  public function select_productdata(){
     
     $query=$this->db->select(['id','productname','price'])->from('product')->get();
     return  $query->result();

	}


}

?>