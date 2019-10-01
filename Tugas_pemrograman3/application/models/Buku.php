<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Buku extends CI_Model {
	public function getdataBuku(){
		$buku = array();
		$this->db->select('tb_buku.id,tb_buku.judul,tb_buku.pengarang,tb_buku.penerbit');
		$this->db->from('tb_buku');
		$data = $this->db->get('')->result_array();
		$i = 0;
		foreach($data as $row):
		$buku[$i] = $row;
		$i++;
	endforeach;
	return $buku;
	}
	public function getjumlahBuku(){
		$this->db->select('tb_buku.id,tb_buku.judul,tb_buku.pengarang,tb_buku.penerbit');
		$this->db->from('tb_buku');
		$data = $this->db->count_all_results('', FALSE);
		return $data;
	}
	public function insertBuku($dataBuku)
	{
		$val = array(
			'judul' => $dataBuku['judul'],
			'pengarang' => $dataBuku['pengarang'],
			'penerbit' => $dataBuku['penerbit']
		);
		$this->db->insert('tb_buku',$val);
	}
public function updateBuku($data_buku)
	{
		$data = array(
			'id' => $data_buku['id'],
			'judul' => $data_buku['judul'],
			'pengarang' => $data_buku['pengarang'],
			'penerbit' => $data_buku['penerbit']
		);
		$this->db->where('id',$data['id']);
		$this->db->update('tb_buku',$data);
	}

	function hapus_data($idbuku){
		$where = array('id' =>$idbuku);
		$this->db->where($where);
		$this->db->delete('tb_buku');
	}
} 