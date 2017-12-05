<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

		public function __construct()
        {
                parent::__construct();
              $this->load->model(array('model_berita'));
      			$this->load->helper(array('form', 'url','download'));                          
        }

	public function tampil_berita()
	{
		$data['berita'] = $this->model_berita->tampilBerita();
		$this->load->view('admin/index');
		$this->load->view('admin/header');
		$this->load->view('admin/menukiri');
		$this->load->view('admin/headerkanan');
		$this->load->view('admin/berita/menu',$data);
		$this->load->view('admin/footer');
		
	}

	public function tambahBerita()
	{	
		$this->load->view('admin/index');
		$this->load->view('admin/header');
		$this->load->view('admin/menukiri');
		$this->load->view('admin/headerkanan');
		$this->load->view('admin/berita/tambahBerita');
		$this->load->view('admin/footer');
	}

	public function simpanBerita(){
		$judul =  $this->input->post('judul');
		$tanggal_posting =  $this->input->post('tgl');
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
		$data_berita= array(
							'judul_berita' => $judul,
							'tgl_posting' => $tanggal_posting,
							'isi' => $isi,
							'gambar' => $url['file_name']);
		$this->model_berita->simpanBerita($data_berita);
		redirect(site_url('admin/berita/tampil_berita'),'refresh');
		}
		}else{
			$data_berita = array('judul_berita' => $judul,
							'tgl_posting' => $tanggal_posting,
							'isi' => $isi,
							'isi_berita' => $isi);
		$this->model_berita->simpanBerita($data_berita);
		redirect(site_url('admin/berita/tampil_berita'),'refresh');
	}
	}

	public function update($id_berita)
			{
			$this->form_validation->set_rules('judul_berita','judul_beritau','required');


		$data['berita'] = $this->model_berita->tampilBerita();
		
				if($this->form_validation->run() == false){
				$data ['berita'] = $this->model_berita->find($id_berita);
				$this->load->view('admin/index');
				$this->load->view('admin/header');
				$this->load->view('admin/menukiri');
				$this->load->view('admin/headerkanan');
				$this->load->view('admin/berita/edit_berita',$data);
				$this->load->view('admin/footer');
				}
				
				else{

				$judul = $this->input->post('judul_berita');
				$isi = $this->input->post('isi');
				if($_FILES['pic']['name']==''){
				$data_berita = array(
										'judul_berita' => $judul,
										'isi' => $isi);

				$this->model_berita->update($id_berita,$data_berita);
				redirect('admin/berita/tampil_berita');
				}else{
				$this->load->library('upload');
		        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
		        $config['upload_path'] = './upload/'; //path folder
		        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		        $config['max_size'] = '2048'; //maksimum besar file 2M
		        $config['max_width']  = '3000'; //lebar maksimum 1288 px
		        $config['max_height']  = '3000'; //tinggi maksimu 768 px
		        $config['file_name'] = $nmfile; //nama yang terupload nantinya

		        $this->upload->initialize($config);
		        if($_FILES['pic']['name'])
		        {
		            if ($this->upload->do_upload('pic'))
		            {
				$judul = $this->input->post('judul_berita');
				$isi = $this->input->post('isi');
		        $url = $this->upload->data();
				$data_berita = array(
										'judul_berita' => $judul,
										'isi' => $isi,
										'gambar' => $url['file_name']
									);

				
				$this->model_berita->update($id_berita,$data_berita);
				redirect('admin/berita/tampil_berita');}
			}
		}
		}
	}

public function hapus($id_berita)
{
	$this->model_berita->hapus($id_berita);
		redirect('admin/berita/tampil_berita');
}


}

/* End of file berita.php */
/* Location: ./application/controllers/admin/berita.php */