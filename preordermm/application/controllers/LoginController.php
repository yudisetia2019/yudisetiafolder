<?php if (!defined('BASEPATH'))  exit('No direct script access allowed');

class LoginController extends CI_Controller {

public function __construct()
{
	parent:: __construct();
	$this->load->helper(array('form','url'));
	$this->load->library(array('session','form_validation','email'));
	$this->load->database();
	$this->load->model('LoginModel');
}

public function loginuser(){
	$username=$this->input->get('username');
	$password=$this->input->get('password');
	$token=$this->input->get('token');

	$data_login=$this->LoginModel->cek_login($username,$password,$token);

	if($data_login=NULL)
	{
		$response=array(
			'stattus'=>'gagal',
			'massage'=>'pengguna belum terdaftar'
		);
	}
	else{
		$this->LoginModel->addToken($username,$password,$token);
		$response=array(
			'status'=>'sukses',
			'datalogin'=>$this->LoginModel->getPengguna($username,$password)
		);
	}
	$this->output
	->set_status_header(200)
	->set_content_type('application/json','utf-8')
	->set_output(json_encode($response,JSON_PRETTY_PRINT))
	->_display();
	exit;
}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
