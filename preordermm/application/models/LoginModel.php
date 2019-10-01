<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginModel extends CI_Model{

	public function cek_login($username,$password,$token){
		$this->db->select('fullname, username, email, location');
		$this->db->from('tbl_user');
		$this->db->where('userStatus','Y');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$data=$this->db->get('')->row_array();
		$num_rows=$this->db->count_all_results('');
		if($num_rows==0)
		{
			return NULL;
		}
		else{
			return $data;
		}
	}
	public function addToken($username,$password,$token){
		$data=array('token'=>$token);
		$this->db->where('userStatus','Y');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$this->db->update('tbl_user',$data);
	}

	public function getPengguna($username,$password)
	{
		$this->db->select('id,fullname,username,email,location,userStatus');
		$this->db->from('tbl_user');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$data=$this->db->get('')->row_array();
		return $data;
	}
}