<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
        parent::__construct();
        error_reporting(0);
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
    public function masterbarang()
	{
        $data['title']      = 'Master Barang';
        $this->load->view('head',$data);
        $this->load->view('menu',$data);
        $this->load->view('masterbarang',$data);
        $this->load->view('footer',$data);
    }
  
    public function daftarpesanan()
	{
        $data['title']      = 'Daftar Pesanan';
        $this->load->view('head',$data);
        $this->load->view('menu',$data);
        $this->load->view('daftarpesanan',$data);
        $this->load->view('footer',$data);
    }
    public function aktivitas()
	{
        $data['title']      = 'Aktivitas';
        $this->load->view('head',$data);
        $this->load->view('menu',$data);
        $this->load->view('aktivitas',$data);
        $this->load->view('footer',$data);
    }
    public function tagihan()
	{
        $data['title']      = 'Tagihan';
        $this->load->view('head',$data);
        $this->load->view('menu',$data);
        $this->load->view('tagihan',$data);
        $this->load->view('footer',$data);
	}
    public function hubungikami()
	{
        $data['title']      = 'Hubungi Kami';
        $this->load->view('head',$data);
        $this->load->view('menu',$data);
        $this->load->view('hubungikami',$data);
        $this->load->view('footer',$data);
    }
    public function gantipassword()
	{
        $data['title']      = 'Ganti Password';
        $this->load->view('head',$data);
        $this->load->view('menu',$data);
        $this->load->view('gantipassword',$data);
        $this->load->view('footer',$data);
	}
}