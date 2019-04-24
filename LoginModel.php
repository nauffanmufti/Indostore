<?php 

class LoginModel extends CI_Model{

	public function login_user($email, $password){
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$result = $this->db->get('user');
		if($result->num_rows()==1){
			return $result->row(0);
		}else{
			return false;
		}
	}
   
	 public function login_admin($email, $password)
	 {
	  $this->db->where('email', $email);
	  $this->db->where('password',$password);
	  $result = $this->db->get('admin');
		 if($result->num_rows()==1){
			 return $result->row(0);
		 }else{
			 return false;
		 }
	 }
   
	public function register_user($table,$data){
		$insert = $this->db->insert($table, $data);
		if ($insert){
		 return TRUE;
		}else{
		 return FALSE;
		}
	}
	public function tambah($data, $table)
	{
		$input = $this->db->insert($data, $table);
		if($input){
		 return true;
		}
		else{
		 return false;
		}
	}

	public function tambahproduk($data, $table){
		
		$input = $this->db->insert($table, $data);
		if($input){
		 return true;
		}
		else{
		 return false;
		}
	}

	public function tambahalamat($data, $table){
		$input = $this->db->insert($table, $data);
		if($input){
		 return true;
		}
		else{
		 return false;
		}
	}

	public function getByEmail($email, $table)
	{
	 $this->db->where('email', $email);
	 $result = $this->db->get($table);
	 if($result->num_row() != 0){
	  return $result->row();

	 }
	 else{
	  return false;
	 }
	}


	public function getData($table)
	{
	 $result = $this->db->get($table);
	 return $result->result_array();
	}

	
	public function editDatabyEmail($email, $data, $table)
	{
	 $this->db->where('email', $email);
	 $update = $this->db->update($data, $table);
	 if($update){
	  return true;
	 }
	 else{
	  return false;
	 }
	}
	public function editProduk($kode, $data)
	{
	 $this->db->where('kode', $kode);
	 $update = $this->db->update($data, 'produk');
	 if($update){
	  return true;
	 }
	 else{
	  return false;
	 }
	}
	
}

 ?>