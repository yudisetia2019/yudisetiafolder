<?php
class M_login extends CI_Model{
	
	function tampil_data(){
		$query=$this->db->query("SELECT * FROM tbl_admin");
		return $query;
	}

	function cek_login($email,$password){
		$query=$this->db->query("SELECT * FROM tbl_admin WHERE email = '$email' AND password = '$password' LIMIT 1");
		return $query;
    }
}