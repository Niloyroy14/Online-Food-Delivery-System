
<?php


class AdminLoginModel extends CI_Model
{
	
	public function login($username,$password){
		
		//$q=$this->db->query("select username,password from admin where username='$username' and password='$password';");

		$q=$this->db->select(['username','password'])->from('admin')->where('username',$username)->where('password',$password)->get();
		
		return $q->row();


	}
}

?>