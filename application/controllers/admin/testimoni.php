<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends CI_Controller {

			public function __construct()
        {
                parent::__construct();
              $this->load->model(array('model_testimoni'));
      			$this->load->helper(array('form', 'url','download'));                          
        }

	public function tampil_testimoni()
	{
		$data['testimoni'] = $this->model_testimoni->tampilTestimoni();
		$this->load->view('admin/index');
		$this->load->view('admin/header');
		$this->load->view('admin/menukiri');
		$this->load->view('admin/headerkanan');
		$this->load->view('admin/testimoni/menu',$data);
		$this->load->view('admin/footer');
		
	}

	public function tambahTestimoni()
	{	
		$this->load->view('admin/index');
		$this->load->view('admin/header');
		$this->load->view('admin/menukiri');
		$this->load->view('admin/headerkanan');
		$this->load->view('admin/testimoni/tambahTestimoni');
		$this->load->view('admin/footer');
	}

	public function simpanTestimoni(){
		$judul =  $this->input->post('judul');
		$pekerjaan =  $this->input->post('pekerjaan');
		$isi =  $this->input->post('isi');
		$this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './upload/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
        $this->upload->initialize($config);
        if($_FILES['pic']['name'])
        {
          if ($this->upload->do_upload('pic'))
          {
        $url = $this->upload->data();
		$data_testimoni= array(
							'nama' => $judul,
							'pekerjaan' => $pekerjaan,
							'isi_testimoni' => $isi,
							'gambar' => $url['file_name']);
		$this->model_testimoni->simpanTestimoni($data_testimoni);
		redirect(site_url('admin/testimoni/tampil_testimoni'),'refresh');
		}
		}else{
			$data_berita = array('judul_berita' => $judul,
							'nama' => $judul,
							'pekerjaan' => $pekerjaan,
							'isi_testimoni' => $isi);
		$this->model_testimoni->simpanTestimoni($data_berita);
		redirect(site_url('admin/testimoni/tampil_testimoni'),'refresh');
	}
	}

public function hapus($id_berita)
{
	$this->model_testimoni->hapus($id_berita);
		redirect('admin/testimoni/tampil_testimoni');
}
}

/* End of file testimoni.php */
/* Location: ./application/controllers/admin/testimoni.php */