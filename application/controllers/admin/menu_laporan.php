<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_laporan extends CI_Controller {

	public function index()
	{

		$this->load->view('admin/index');
		$this->load->view('admin/header');
		$this->load->view('admin/menukiri');
		$this->load->view('admin/headerkanan');
		$this->load->view('admin/laporan/Menu_laporan');
		$this->load->view('admin/footer');
		
	}

}

/* End of file menu_laporan.php */
/* Location: ./application/controllers/admin/menu_laporan.php */