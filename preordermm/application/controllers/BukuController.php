<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class BukuController extends CI_Controller {
	public function __construct()

{
	parent:: __construct();
	$this->load->model('Buku');
}
	public function getBuku(){
			$response = array(
						'hasil'=>$this->Buku->getdataBuku(),
						'jumlah'=>$this->Buku->getjumlahBuku()
						);
				$this->output
						->set_status_header(200)
						->set_content_type('application/json', 'utf-8')
						->set_output(json_encode($response))
						->_display();
						exit;
	}

	

	public function saveBuku(){
		$data = (array)json_decode(file_get_contents('php://input'));
		$data_buku['judul'] = $data['judul'];
		$data_buku['pengarang'] = $data['pengarang'];
		$data_buku['penerbit'] = $data['penerbit'];

		$this->Buku->insertBuku($data_buku);

		$response = array(
			'Success' => true,
			'Info' => 'Data Tersimpan');

		$this->output
						->set_status_header(200)
						->set_content_type('application/json', 'utf-8')
						->set_output(json_encode($response))
						->_display();
						exit;

	}

	public function updateBuku(){
		$data = (array)json_decode(file_get_contents('php://input'));
		$data_buku['id'] = $data['id'];
		$data_buku['judul'] = $data['judul'];
		$data_buku['pengarang'] = $data['pengarang'];
		$data_buku['penerbit'] = $data['penerbit'];

		$this->Buku->updateBuku($data_buku);

		$response = array(
			'Success' => true,
			'Info' => 'Data Berhasil Di Update');

		$this->output
						->set_status_header(200)
						->set_content_type('application/json', 'utf-8')
						->set_output(json_encode($response))
						->_display();
						exit;

	}

	public function deleteBuku(){
		$data = (array)json_decode(file_get_contents('php://input'));
		$id_buku = $data['id'];

		$this->Buku->hapus_data($id_buku);

		$response = array(
			'Success' => true,
			'Info' => 'Data Berhasil Di Hapus');

		$this->output
						->set_status_header(200)
						->set_content_type('application/json', 'utf-8')
						->set_output(json_encode($response))
						->_display();
						exit;

	}
	//eror 500 di database
	//400 code phpnya yang salah
}

?>