<?php
class m_home extends CI_Model{
	
	function tampil_data(){
		$query=$this->db->query("SELECT * FROM v_listbelanja");
		return $query;
	}
}