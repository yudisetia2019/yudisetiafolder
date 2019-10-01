<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
        parent::__construct();
		$this->load->model('m_login');
        $this->load->model('m_home');
        
        if($this->session->userdata('login') != TRUE){
            redirect('login');
        }

        if($this->session->userdata('ses_level') != 1){
            show_404();
        }
    }

	public function index()
	{
        $data['title']      = 'Home';
        $data['transaksi']  = $this->m_home->tampil_data()->result();
        $this->load->view('head',$data);
        $this->load->view('menu',$data);
        $this->load->view('home',$data);
        $this->load->view('footer',$data);
	}
}