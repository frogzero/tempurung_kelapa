<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller {

		public function __construct(){
		parent::__construct();
		$this->load->model(array('model_produk','model_kategori','model_web','model_konsumen','model_stok','model_diskon'));
		$this->load->library('cart');
		$this->load->helper(array('form', 'url'));  
	}

	
	public function simpan_keranjang($produk_id)
	{
		$hargaa = $this->input->post('hargaa');
		$produk = $this->model_produk->find($produk_id);
		$id_produk=$produk->id_produk;
		$id_harga = $this->input->post('jumlahPerLiter');
		$jumlah = $this->input->post('jumlah');
		$lihat_stok = $this->model_stok->cekStokHarganew();
		
		foreach ($lihat_stok as  $stok) 
		{
			$stok_idproduk=$stok->id_produk;
			$stok_produk=$stok->stok;
			$stok_id_harga=$stok->id_harga;
			if ($stok_idproduk==$id_produk&&$id_harga==$stok_id_harga&&$jumlah<=$stok_produk) 
		{

			$keranjang = $this->cart->contents();
			$rowid='';
			$ketersediaan=false;
			$i=0;

			foreach ($keranjang as $keranjang) {
				$i++;
				if ($keranjang['a_harga']==$id_harga&&$keranjang['option']==$id_produk) {
					$ketersediaan=true;
					$rowid=$keranjang['rowid'];
				}
			}
			if ($ketersediaan) {
				$data = array(
					'rowid' => $rowid,
					'qty'   => $jumlah
				);
				
				$this->cart->update($data);
	echo '<script type="text/javascript">';
     	echo 'alert("Produk Berhasil Di Ubah")';
     	echo '</script>';    
     	echo '<script type="text/javascript">';    
       	echo 'window.location.assign("'.base_url().'")'; 
      	echo '</script>';
			}else{
				$cekidHarga1 ='';
		$cekJumlahHarga1 = '';

		$lihat_id_harga = $this->model_stok->LihatIdHarga($id_harga);
		foreach ($lihat_id_harga as $num_rows => $cekIdHarga) {
		$cekidHarga1 =$cekIdHarga->harga;
		$cekJumlahHarga1 = $cekIdHarga->jumlah;

			
		}
				$data = array(
					'id'      => $i,
					'qty'     => $jumlah,
					'price'   => $cekidHarga1,
					'size'	  => $cekJumlahHarga1,
					'name'    => $produk->nama,	
					'a_harga'    => $id_harga,				
					'option'  => $id_produk
				);
				
				$this->cart->insert($data);

		echo '<script type="text/javascript">';
     	echo 'alert("Produk Berhasil Di Inputkan ke keranjang")';
     	echo '</script>';    
     	echo '<script type="text/javascript">';    
       	echo 'window.location.assign("'.site_url('home').'")'; 
      	echo '</script>';

			}
		}
		}
		echo '<script type="text/javascript">';
     	echo 'alert("Maaf Stok Habis")';
     	echo '</script>';    
     	echo '<script type="text/javascript">';    
       	echo 'window.location.assign("'.base_url().'")'; 
      	echo '</script>';
				
	}
		

public function simpanPenerima()
	{
		$nama_penerima = $this->input->post('nama');
		$alamat_penerima = $this->input->post('alamat');
		$kota_penerima = $this->input->post('kota');
		$provinsi_penerima = $this->input->post('provinsi');
		$kodepos_penerima = $this->input->post('kodepos');
		$nohp_penerima = $this->input->post('nohp');
		$data_penerima = array(
			'nama_penerima' => $nama_penerima, 
			'alamat_penerima' => $alamat_penerima,
			'kota_penerima' => $kota_penerima,
			'provinsi_penerima' => $provinsi_penerima,
			'kodepos_penerima' => $kodepos_penerima,
			'nohp_penerima' => $nohp_penerima,
			);
		$this->session->set_userdata($data_penerima);
		redirect('pesanan/checkout_final','refresh');
}

public function checkout_final($id_konsumen='')
	{
	    $data['kategori'] = $this->model_kategori->tampilKategori();
		if($id_konsumen==""){
		$id_konsumen = $this->session->userdata('kd_user');
		}
		if(($this->session->userdata('name'))&&($this->session->userdata('level') == "konsumen")){ 
		$result = $this->model_konsumen->get_detail_konsumen($id_konsumen);
		$subdata['result_detail_konsumen'] = $result;
		$data['content'] = $this->load->view('/web/checkoutNodiskon',$subdata,TRUE);
		$data['ongkir'] = $this->model_web->tampil_ongkir_final();

		$this->load->view('web_view/index');
		$this->load->view('web_view/header');
		$this->load->view('web_view/logo');
		$this->load->view('web_view/checkout_fix',$data);
		$this->load->view('web_view/footer');
	}else{
		echo '<script language="javascript">';
		echo 'alert("Maaf Anda Harus Login Dulu, Jika Belum Punya akun Silahkan Registrasi")';
		echo '</script>';
		  echo '<script type="text/javascript">';    
       echo 'window.location.assign("'.base_url().'")'; 
      echo '</script>';
	}

}

public function bersih()
	{
		$this->cart->destroy();
		redirect('home/keranjang_belanja','refresh');

}

public function checkout($id_konsumen='')
	{
	    $data['kategori'] = $this->model_kategori->tampilKategori();
		if($id_konsumen==""){
		$id_konsumen = $this->session->userdata('kd_user');
		}
		if(($this->session->userdata('name'))&&($this->session->userdata('level') == "konsumen")){ 
		$result = $this->model_konsumen->get_detail_konsumen($id_konsumen);
		$subdata['result_detail_konsumen'] = $result;
		$data['content'] = $this->load->view('/web/checkoutNodiskon',$subdata,TRUE);
		$data['ongkir'] = $this->model_web->tampil_ongkir();

		$this->load->view('web_view/index');
		$this->load->view('web_view/header');
		$this->load->view('web_view/logo');
		$this->load->view('web_view/checkout',$data);
		$this->load->view('web_view/footer');
	}else{
		echo '<script language="javascript">';
		echo 'alert("Maaf Anda Harus Login Dulu, Jika Belum Punya akun Silahkan Registrasi")';
		echo '</script>';
		  echo '<script type="text/javascript">';    
       echo 'window.location.assign("'.base_url().'")'; 
      echo '</script>';
	}

}



}

/* End of file pesanan.php */
/* Location: ./application/controllers/pesanan.php */