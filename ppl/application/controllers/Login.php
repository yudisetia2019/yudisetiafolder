<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
        parent::__construct();
		$this->load->model('m_login');

    }

	public function index()
	{
		$this->load->view('login');
	}

	public function aksi()
	{
		$post = $this->input->post();
		$email= $post['email'];
		$password=$post['password'];
		if($post['id_level']== 1){
			$cek_admin = $this->m_login->cek_login($email,$password);
			if($cek_admin->num_rows() > 0){
				$data = $cek_admin->row_array();
				$this->session->set_userdata('login',TRUE);
				$this->session->set_userdata('ses_admin',$data['id_admin']);
				$this->session->set_userdata('ses_level',$data['id_level']);
				$this->session->set_flashdata('message', ' selamat datang' .$data['nama_admin']);
				redirect(base_url('home'));
			}
			else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><small><strong>Warning !</strong><br><Email atau password salah.</small></div>');
				redirect(base_url('login'));
			}
		}
		else{
			$cek_anggota = $this->m_login->cek_login_anggota($email,$password);
			if($cek_admin->num_rows() > 0){
				$data = $cek_admin->row_array();
				$this->session->set_userdata('login',TRUE);
				$this->session->set_userdata('ses_admin',$data['id_anggota']);
				$this->session->set_userdata('ses_level',$data['id_level']);
				$this->session->set_flashdata('message', ' selamat datang' .$data['nama_anggota']);
				redirect(base_url('anggota/home'));
			}
			else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><small><strong>Warning !</strong><br><Email atau password salah.</small></div>');
				redirect(base_url('login'));
			}
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}