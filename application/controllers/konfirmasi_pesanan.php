<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasi_pesanan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('model_komentar','model_produk','model_kategori','model_web','model_konsumen','model_pesanan'));
		$this->load->library('cart');
		$this->load->helper(array('form', 'url'));  
	}

	public function Konfirmasi($kodeBayar)
	{
		$today = date('Y-m-d');
		$data['kategori'] = $this->model_kategori->tampilKategori();
		$this->form_validation->set_rules('nama','nama','required');
		$dataa['kode'] = $this->model_konsumen->kode_konsumen();
		if(($this->session->userdata('name'))&&($this->session->userdata('level') == "konsumen")){
		if($this->form_validation->run() == false){
		$data ['bayar'] = $this->model_pesanan->findBayar($kodeBayar);

		$this->load->view('web_view/index');
		$this->load->view('web_view/header');
		$this->load->view('web_view/logo');
		$this->load->view('web_view/form_konfirmasi',$data);
		$this->load->view('web_view/footer');
				}
				else{
				$catatan = $this->input->post('catatan');
				$atas_nama = $this->input->post('atas_nama');
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
        $url = $this->upload->data();

        $data_konfirmasi= array(
										'catatan' => $catatan,
										'tanggal_konfirmasi' => $today,
										'status' => 'Sudah Konfirmasi',
										'atasNama' => $atas_nama,
										'gambar_konfirmasi' => $url['file_name']
									);
					$this->model_pesanan->konfirmasiPelanggan($kodeBayar,$data_konfirmasi);		
			echo '<script language="javascript">';
			echo 'alert("Terimakasih. Pesanan anda akan segera kami proses.")';
			echo '</script>';
		    echo '<script>';
			echo 'window.location=("'.site_url('home/statusPesan/').'");';
			echo '</script>'; 
		}
		 
	
		}$data_konfirmasi= array(
										'catatan' => $catatan,
										'tanggal_konfirmasi' => $today,
										'status' => 'Sudah Konfirmasi',
										'atasNama' => $atas_nama
									);
					$this->model_pesanan->konfirmasiPelanggan($kodeBayar,$data_konfirmasi);
					echo '<script language="javascript">';
			echo 'alert("Terimakasih. Pesanan anda akan segera kami proses.")';
			echo '</script>';
		    echo '<script>';
			echo 'window.location=("'.site_url('home/statusPesan/').'");';
			echo '</script>'; 
				}
	}else{

		$this->load->view('web_menu/index');
		$this->load->view('web_menu/header');
		$this->load->view('web_menu/sub_header');
		$this->load->view('web_menu/form_konfirmasi',$data);
		$this->load->view('web_menu/footer');
	}
}

public function pesanbatal($kodeBayar)
	{	
				$data_pesan= array(
										'status' => 'Pesanan Dibatalkan'
									);

				$this->model_pesanan->batalPesanan($kodeBayar,$data_pesan);
				redirect(base_url('index.php/home/Konfirmasi/'));
				
}

}

/* End of file konfirmasi_pesanan.php */
/* Location: ./application/controllers/konfirmasi_pesanan.php */