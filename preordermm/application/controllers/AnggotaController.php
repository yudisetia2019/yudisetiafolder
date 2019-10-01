<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class AnggotaController extends CI_Controller {
	public function __construct()

{
	parent:: __construct();
	$this->load->model('Anggota');
}
	public function getAnggota(){
			$response = array(
						'hasil'=>$this->Anggota->getdataAnggota(),
						'jumlah'=>$this->Anggota->getjumlahAnggota()
						);
				$this->output
						->set_status_header(200)
						->set_content_type('application/json', 'utf-8')
						->set_output(json_encode($response))
						->_display();
						exit;
	}

	

	public function saveAnggota(){
		$data = (array)json_decode(file_get_contents('php://input'));
		$data_anggota['id'] = $data['id'];
		$data_anggota['nama'] = $data['nama'];
		$data_buku['alamat'] = $data['alamat'];

		$this->Anggota->insertAnggota($data_anggota);

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

	public function updateAnggota(){
		$data = (array)json_decode(file_get_contents('php://input'));
		$data_anggota['id'] = $data['id'];
		$data_anggota['nama'] = $data['nama'];
		$data_anggota['alamat'] = $data['alamat'];
	

		$this->anggota->updateAnggota($data_anggota);

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

	public function deleteAnggota(){
		$data = (array)json_decode(file_get_contents('php://input'));
		$id_buku = $data['id'];

		$this->Anggota->hapus_data($id_anggota);

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