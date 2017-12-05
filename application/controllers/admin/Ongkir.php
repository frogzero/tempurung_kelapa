<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ongkir extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		 $this->load->model(array('Model_ongkir','model_rekening'));
	}

	public function index()
	{
		$data['ongkir'] = $this->Model_ongkir->tampilOngkir();
		$this->load->view('admin/index');
		$this->load->view('admin/header');
		$this->load->view('admin/menukiri');
		$this->load->view('admin/headerkanan');
		$this->load->view('admin/Ongkir/menuongkir',$data);
		$this->load->view('admin/footer');
		
	}
	public function Ubah($id_ongkir)
	{
		$data['ongkir'] = $this->Model_ongkir->tampilUbahOngkir($id_ongkir);
		$this->load->view('admin/index');
		$this->load->view('admin/header');
		$this->load->view('admin/menukiri');
		$this->load->view('admin/headerkanan');
		$this->load->view('admin/ongkir/menuUbahOngkir',$data);
		$this->load->view('admin/footer');
		
	}

	public function ubahOngkir($id_ongkir)
	{
		$harga_ongkir = $this->input->post('harga_ongkir');

		$this->Model_ongkir->ubahOngkirFinal($id_ongkir,$harga_ongkir);
		redirect('admin/Ongkir','refresh');
	}

	public function simpanRekening()
	{
		$nama_bank = $this->input->post('nama_bank');
		$atas_nama = $this->input->post('atas_nama');
		$no_rekening = $this->input->post('no_rekening');
		$data_rekening = array('nama' => $nama_bank ,
		'atas_nama' => $atas_nama,
		'no_rekening' => $no_rekening  );
		$this->model_rekening->simpanRekeningDB($data_rekening);
		redirect(site_url('/admin/rekening'),'refresh');
	}

	public function hapusRekening($id_rekening)
	{
		$this->model_rekening->hapusRekening($id_rekening);
		redirect(site_url('/admin/rekening'),'refresh');
	}

}

/* End of file review.php */
/* Location: ./application/controllers/admin/review.php */