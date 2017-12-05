<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
              $this->load->model(array('model_produk','model_kategori','model_size','model_stok'));
      			$this->load->helper(array('form', 'url','download'));                          
        }
	public function tambah($id_harga)
	{

		$data['size'] = $this->model_stok->tampilStokHarga($id_harga);
		$data['produk'] = $this->model_stok->cekStokHarga($id_harga);
		$this->load->view('admin/index');
		$this->load->view('admin/header');
		$this->load->view('admin/menukiri');
		$this->load->view('admin/headerkanan');
		$this->load->view('admin/produk/stok_menu',$data);
		$this->load->view('admin/footer');
	}

	public function tambah_stok_harga($id_produk)
	{
		$data['produk'] = $this->model_stok->findProduk($id_produk);
		$this->load->view('admin/index');
		$this->load->view('admin/header');
		$this->load->view('admin/menukiri');
		$this->load->view('admin/headerkanan');
		$this->load->view('admin/produk/form_tambah_stok',$data);
		$this->load->view('admin/footer');
	}
	function alert(){
		$this->load->view('admin/alert_stok');
	}


	public function simpan_stok_baru(){
		$id_produk_new = $this->input->post('id_produk');
		$jumlah_barang = $this->input->post('jumlah_barang');
	    $harga_barang = $this->input->post('harga_barang');
	    $stok_harga = $this->input->post('stok_harga');

	    $tampil_semua_stok_harga = $this->model_stok->tampilSemuaHarga();
	    foreach ($tampil_semua_stok_harga as $rows => $r) {
	    	if ($r->jumlah==$jumlah_barang&&$r->id_produk==$id_produk_new) {
	    	redirect('admin/stok/alert','refresh');


	    }
	    }
	    	$data_stok_harga = array('id_produk' =>$id_produk_new , 
	        	 			'jumlah' => $jumlah_barang,
	        	 			'harga' => $harga_barang,
		    				'stok'=>$stok_harga);
	        	 $this->model_stok->simpanStokBaru($data_stok_harga);
	        	 redirect(site_url('admin/stok/ketersediaanStok'),'refresh');
	   
	    		 
	    		



	    		
	}

	       
/*
	echo '<script type="text/javascript">';
			     	echo 'alert("Mohon Maaf, Jumlah Sudah ada, Silahkan Update stok Di menu Stok")';
			     	echo '</script>';    
			     	echo '<script type="text/javascript">';    
			       	echo 'window.location.assign("'.site_url('admin/stok/ketersediaanStok').'")'; 
			      	echo '</script>';    	*/

	    
	     
	     	         		
	    	/* $data_stok_harga = array('id_produk' =>$id_produk_new , 
	        	 			'jumlah' => $jumlah_barang[$a],
	        	 			'harga' => $harga_barang[$a],
		    				'stok'=>$stok_harga[$a]);
	        	 $this->model_stok->simpanStokBaru($data_stok_harga);}*/ 

	public function simpanStok($id_harga){
			$stok = $this->input->post('stok');

	        	$datastok = array('stok'=>$stok);

	        	$this->model_stok->update_stok_harga($datastok,$id_harga);

			redirect('admin/produk/tampil_produk');
	}

	public function ketersediaanStok()
	{
		$data['stok'] = $this->model_stok->ketersediaanStok();	
		$this->load->view('admin/index');
		$this->load->view('admin/header');
		$this->load->view('admin/menukiri');
		$this->load->view('admin/headerkanan');
		$this->load->view('admin/produk/stok/tampilStok',$data);
		$this->load->view('admin/footer');

	}

}

/* End of file stok.php */
/* Location: ./application/controllers/stok.php */