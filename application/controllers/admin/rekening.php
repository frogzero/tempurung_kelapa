<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekening extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Model_rekening'));
		 $this->load->helper(array('form', 'url')); 
	}

	public function index()
	{
		$data['rekening'] = $this->Model_rekening->tampilRekening();
		$this->load->view('admin/index');
		$this->load->view('admin/header');
		$this->load->view('admin/menukiri');
		$this->load->view('admin/headerkanan');
		$this->load->view('admin/rekening/menuRekening',$data);
		$this->load->view('admin/footer');
		
	}

	public function tambah()
	{
		$this->load->view('admin/index');
		$this->load->view('admin/header');
		$this->load->view('admin/menukiri');
		$this->load->view('admin/headerkanan');
		$this->load->view('admin/rekening/menuTambahRekening');
		$this->load->view('admin/footer');
		
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

	

}

/* End of file rekening.php */
/* Location: ./application/controllers/admin/rekening.php */