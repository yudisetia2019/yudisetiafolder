<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Model{

/* 
    public function getdatabuku(){
        $buku = array();
        $this->db->select('id, judul, pengarang, penerbit');
        $this->db->from('tb_buku');
        $data = $this->db->get('')->result_array();
        $i = 0;
        foreach($data as $row) :
            $buku[$i] = $row;
            $i++;
        endforeach;
        return $buku;
    }

    public function getjumlahbuku(){
        $this->db->select('id, judul, pengarang, penerbit');
        $this->db->from('tb_buku');
        $data = $this->db->count_all_results('', FALSE);
        return $data;
    }

     */

	function ambil_buku($limit, $start){
        $query = $this->db->get('tb_buku', $limit, $start);
        return $query;
    }
}