<?php


class AdminProductModel extends CI_Model
{
	
	public function insert_product($data){

		return $this->db->insert('product',$data);
	}

	public function select_productdata(){
     
     $query=$this->db->select(['id','productname','price'])->from('product')->get();
     return  $query->result();

	}


   public function edit_product($id){
     
     $query=$this->db->select(['id','productname','price'])->from('product')->where('id',$id)->get();
     return  $query->row();

  }

    public function update_product($id, Array $data){
     
      return $this->db->where('id',$id)->update('product',$data);

    }

     public function delete_product($id){
     
      return $this->db->delete('product',['id'=>$id]);
     }


   public function productsearch($productname){

   	 $query=$this->db->select(['id','productname','price'])->from('product')->like('productname',$productname)->get();
     return  $query->row();
   }


   public function offline_product_book($id){
   
   $query=$this->db->select(['id','productname','price'])->from('product')->where('id',$id)->get();  

    return  $query->row();
   }



   public function insert_offline_booking($data){

		return $this->db->insert('offline_order',$data);
	}
	
  

  public function select_offline_order_data(){
    
    $query=$this->db->get('offline_order');
     return  $query->result();

  }


  public function edit_offline_order($id){
     
     $query=$this->db->select(['id','product_name','price','customer_name','address','mobile_no','pincode','city','email'])->from('offline_order')->where('id',$id)->get();

     return  $query->row();

  }

    public function update_offline_order($id, Array $data){
     
      return $this->db->where('id',$id)->update('offline_order',$data);

    }


     public function delete_offline_order($id){
     
      return $this->db->delete('offline_order',['id'=>$id]);
     }




/*online Order*/ 


 public function select_online_order_data(){
    
    $query=$this->db->get('online_order');
     return  $query->result();

  }


public function edit_online_order($id){
     
     $query=$this->db->select(['id','product_name','price','user_name','address','mobile_no','city'])->from('online_order')->where('id',$id)->get();

     return  $query->row();

  }

    public function update_online_order($id, Array $data){
     
      return $this->db->where('id',$id)->update('online_order',$data);

    }


     public function delete_online_order($id){
     
      return $this->db->delete('online_order',['id'=>$id]);
     }




}

?>