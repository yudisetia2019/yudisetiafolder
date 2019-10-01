<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anggota extends CI_Model {
	public function getdataAnggota(){
		$anggota = array();
		$this->db->select('anggota.id,anggota.nama,anggota.alamat');
		$this->db->from('anggota');
		$data = $this->db->get('')->result_array();
		$i = 0;
		foreach($data as $row):
		$anggota[$i] = $row;
		$i++;
	endforeach;
	return $anggota;
	}
	public function getjumlahAnggota(){
		$this->db->select('anggota.id,anggota.nama,anggota.alamat');
		$this->db->from('anggota');
		$data = $this->db->count_all_results('', FALSE);
		return $data;
	}
	public function insertAnggota($dataAnggota)
	{
		$val = array(
			'id' => $dataAnggota['id'],
			'nama' => $dataAnggota['nama'],
			'alamat' => $dataAnggota['alamat']
		);
		$this->db->insert('anggota',$val);
	}
public function updateAnggota($data_anggota)
	{
		$data = array(
			'id' => $data_anggota['id'],
			'nama' => $data_anggota['nama'],
			'alamat' => $data_buku['alamat'],
			
		);
		$this->db->where('id',$data['id']);
		$this->db->update('anggota',$data);
	}

	function hapus_data($idanggota){
		$where = array('id' =>$idbanggota);
		$this->db->where($where);
		$this->db->delete('anggota');
	}
} 