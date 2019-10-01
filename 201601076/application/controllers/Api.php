<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('buku');
        $this->load->library('pagination');
    }
    
    function index(){
		$config['base_url'] 		= base_url('api/index');
        $config['total_rows'] 		= $this->db->count_all('tb_buku');
        $config['per_page'] 		= 3;
        $config["uri_segment"] 		= 3;
        $choice 					= $config["total_rows"] / $config["per_page"];
        $config["num_links"] 		= floor($choice);
        $this->pagination->initialize($config);
        $page                      = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;


        $buku        			    = $this->buku->ambil_buku($config["per_page"], $page)->result();
        $jumlah        			    = $this->buku->ambil_buku($config["per_page"], $page)->num_rows();
        $response = array(
                'hasil' => $buku,
                'halaman' => $page,
                'jumlah' => $jumlah
        );
        $this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($response))
        ->_display();

        exit;
        //echo json_encode($response, JSON_PRETTY_PRINT);
    }
}