<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('model_komentar','model_produk','model_kategori','model_web','model_konsumen','model_pesanan','model_slider','model_stok'));
		$this->load->library('cart');
		$this->load->helper(array('form', 'url'));  
	}

	public function index()
	{
		$this->load->library('pagination');
		$page=$this->uri->segment(3);
      	$limit=8;
		if(!$page):
		$offset = 0;
		else:
		$offset = $page;
		endif;
		$tot_hal = $this->model_web->hitung_isi_tabel('produk','');
		
		$config['base_url'] = site_url().'/home/index';
        $config['total_rows'] = $tot_hal->num_rows();
        $config['per_page'] = $limit;
		$config['uri_segment'] = 3;
		//config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '&laquo; First';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last &raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = 'Next &rarr;';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&larr; Prev';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="current"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';		
		$this->pagination->initialize($config);
		$data["paginator"] =$this->pagination->create_links();
        $data['laris'] = $this->model_web->tampilProdukTerlaris();
		$data['kategori'] = $this->model_kategori->tampilKategori();
		$data['produk'] = $this->model_produk->all($limit,$offset);
		$konsumen['kode'] = $this->model_konsumen->kode_konsumen();
		$data['slider'] = $this->model_web->tampilSlider();
		$data['berita'] = $this->model_web->tampilBerita();
		$this->load->view('web_view/index');
		$this->load->view('web_view/header');
		$this->load->view('web_view/logo');
		$this->load->view('web_view/baner',$data);
		$this->load->view('web_view/sub_menu');
		$this->load->view('web_view/laris',$data);
		$this->load->view('web_view/content',$data);
		$this->load->view('web_view/footer');
	}
	public function register()
	{
		//$data['laris'] = $this->model_web->tampilProdukTerlaris();
		$this->load->view('web_menu/index');
		$this->load->view('web_menu/header');
		$this->load->view('web_menu/sub_header');
		$this->load->view('web_menu/register');
		$this->load->view('web_menu/footer');
		
	}

public function konfirmasi($id_konsumen='')
	{
		if($id_konsumen==""){
		$id_konsumen = $this->session->userdata('kd_user');
		}		
		$result = $this->model_pesanan->tampil_bayar_belum_konfirmasi($id_konsumen);
		$subdata['result_detail_bayar'] = $result;
		$dataa['content'] = $this->load->view('web_view/konfirmasi',$subdata,TRUE);

		$this->load->view('web_view/index');
		$this->load->view('web_view/header');
		$this->load->view('web_view/logo');
		$this->load->view('web_view/konfirmasi',$dataa);
		$this->load->view('web_view/footer');
}
	public function login()
	{
		//$data['laris'] = $this->model_web->tampilProdukTerlaris();
		$this->load->view('web_menu/index');
		$this->load->view('web_menu/header');
		$this->load->view('web_menu/sub_header');
		$this->load->view('web_menu/login');
		$this->load->view('web_menu/footer');
		
	}

	public function keranjang_belanja()
	{
		$this->load->view('web_view/index');
		$this->load->view('web_view/header');
		$this->load->view('web_view/logo');
		$this->load->view('web_view/keranjang');
		$this->load->view('web_view/footer');
	}


	public function testimoni()
	{
		$this->load->library('pagination');
		$page=$this->uri->segment(3);
      	$limit=8;
		if(!$page):
		$offset = 0;
		else:
		$offset = $page;
		endif;
		$tot_hal = $this->model_web->hitung_isi_tabel('berita','');
		
		$config['base_url'] = site_url().'/home/blog';
        $config['total_rows'] = $tot_hal->num_rows();
        $config['per_page'] = $limit;
		$config['uri_segment'] = 3;
		//config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '&laquo; First';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last &raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = 'Next &rarr;';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&larr; Prev';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="current"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';		
		$this->pagination->initialize($config);
		$data["paginator"] =$this->pagination->create_links();
		$data['testimoni'] = $this->model_web->tampilTestimoni($limit,$offset);
		 $data['laris'] = $this->model_web->tampilProdukTerlaris();
		 
		$this->load->view('web_view/index');
		$this->load->view('web_view/header');
		$this->load->view('web_view/logo');

		$this->load->view('web_view/sub_menu');
		$this->load->view('web_view/testimoni',$data);
		$this->load->view('web_view/footer');
	}

	public function blog()
	{
		$this->load->library('pagination');
		$page=$this->uri->segment(3);
      	$limit=8;
		if(!$page):
		$offset = 0;
		else:
		$offset = $page;
		endif;
		$tot_hal = $this->model_web->hitung_isi_tabel('berita','');
		
		$config['base_url'] = site_url().'/home/blog';
        $config['total_rows'] = $tot_hal->num_rows();
        $config['per_page'] = $limit;
		$config['uri_segment'] = 3;
		//config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '&laquo; First';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last &raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = 'Next &rarr;';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&larr; Prev';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="current"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';		
		$this->pagination->initialize($config);
		$data["paginator"] =$this->pagination->create_links();
		$data['artikel'] = $this->model_web->tampilBeritaWeb($limit,$offset);
		 $data['laris'] = $this->model_web->tampilProdukTerlaris();
		 
		$this->load->view('web_view/index');
		$this->load->view('web_view/header');
		$this->load->view('web_view/logo');

		$this->load->view('web_view/sub_menu');
		$this->load->view('web_view/blog',$data);
		$this->load->view('web_view/footer');
	}
	public function akun_login()
	{
		//$data['laris'] = $this->model_web->tampilProdukTerlaris();
		$this->load->view('web_menu/index');
		$this->load->view('web_menu/header_akun');
		$this->load->view('web_menu/sub_header');
		$this->load->view('web_menu/login');
		$this->load->view('web_menu/footer');
		
	}

	public function produk_info($id_detail)
	{
		$data['produk'] = $this->model_web->lihatDetail($id_detail);
		$dataa['kode'] = $this->model_konsumen->kode_konsumen();
		$data['review'] = $this->model_komentar->tampilReview($id_detail);
		$data['stok'] = $this->model_web->tampilStok($id_detail);
		$data['slider'] = $this->model_web->tampilSlider();
        $data['laris'] = $this->model_web->tampilProdukTerlarisDetail();
		$data['kategori'] = $this->model_kategori->tampilKategori();
		$this->load->view('web_view/index');
		$this->load->view('web_view/header');
		$this->load->view('web_view/logo');

		$this->load->view('web_view/sub_menu');
		$this->load->view('web_view/produk_info',$data);

		$this->load->view('web_view/footer');
	}

	public function baca($id_berita)
	{
		$data['baca'] = $this->model_web->lihatberita($id_berita);
       	 $data['laris'] = $this->model_web->tampilProdukTerlaris();
	
		$this->load->view('web_view/index');
		$this->load->view('web_view/header');
		$this->load->view('web_view/logo');

		$this->load->view('web_view/sub_menu');
		$this->load->view('web_view/baca_berita',$data);
		$this->load->view('web_view/footer');
	}

	public function kontak()
	{		
       	 $data['laris'] = $this->model_web->tampilProdukTerlaris();
	
		$this->load->view('web_view/index');
		$this->load->view('web_view/header');
		$this->load->view('web_view/logo');
		$this->load->view('web_view/sub_menu');
		$this->load->view('web_view/kontak',$data);
		$this->load->view('web_view/footer');
	}

	public function cara_pembelian()
	{		
       	 $data['laris'] = $this->model_web->tampilProdukTerlaris();
	
		$this->load->view('web_view/index');
		$this->load->view('web_view/header');
		$this->load->view('web_view/logo');
		$this->load->view('web_view/sub_menu');
		$this->load->view('web_view/cara_pembelian',$data);
		$this->load->view('web_view/footer');
	}

	public function baca_testimoni($id_berita)
	{
		$data['baca'] = $this->model_web->lihatTestimoni($id_berita);
       	 $data['laris'] = $this->model_web->tampilProdukTerlaris();
	
		$this->load->view('web_view/index');
		$this->load->view('web_view/header');
		$this->load->view('web_view/logo');

		$this->load->view('web_view/sub_menu');
		$this->load->view('web_view/baca_testimoni',$data);
		$this->load->view('web_view/footer');
	}

	public function all_produk()
	{
		$this->load->library('pagination');
		$page=$this->uri->segment(3);
      	$limit=8;
		if(!$page):
		$offset = 0;
		else:
		$offset = $page;
		endif;
		$tot_hal = $this->model_web->hitung_isi_tabel('produk','');
		
		$config['base_url'] = site_url().'/home/index';
        $config['total_rows'] = $tot_hal->num_rows();
        $config['per_page'] = $limit;
		$config['uri_segment'] = 3;
		//config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '&laquo; First';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last &raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = 'Next &rarr;';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&larr; Prev';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="current"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';		
		$this->pagination->initialize($config);
		$data["paginator"] =$this->pagination->create_links();
        $data['laris'] = $this->model_web->tampilProdukTerlaris();
		$data['kategori'] = $this->model_kategori->tampilKategori();
		$data['produk'] = $this->model_produk->all($limit,$offset);
		$konsumen['kode'] = $this->model_konsumen->kode_konsumen();
		$data['slider'] = $this->model_web->tampilSlider();
		$this->load->view('web_view/index');
		$this->load->view('web_view/header');
		$this->load->view('web_view/logo');
		$this->load->view('web_view/baner',$data);
		$this->load->view('web_view/sub_menu');
		$this->load->view('web_view/laris',$data);
		$this->load->view('web_view/content',$data);
		$this->load->view('web_view/footer');
	}

	public function Perkategori($id_kategori,$offset=NULL)
	{
		$this->load->library('pagination');
		$page=$this->uri->segment(4);
      	$limit=8;
		if(!$page):
		$offset = 0;
		else:
		$offset = $page;
		endif;
		$tot_hal = $this->model_web->hitung_isi_tabel_perkategori('produk','',$id_kategori);
		
		$config['base_url'] = site_url().'/home/index/'.$id_kategori;
        $config['total_rows'] = $tot_hal->num_rows();
        $config['per_page'] = $limit;
		$config['uri_segment'] = 3;
		
		//config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '&laquo; First';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last &raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = 'Next &rarr;';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&larr; Prev';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="current"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';
		
		$this->pagination->initialize($config);
		$data["paginator"] =$this->pagination->create_links();
        $data['laris'] = $this->model_web->tampilProdukTerlaris();
		$data['kategori'] = $this->model_kategori->tampilKategori();
		$data['produk'] = $this->model_web->tampilPerKategori($id_kategori,$limit,$offset);
		$dataa['kode'] = $this->model_konsumen->kode_konsumen();
		$dataLaris['laris'] = $this->model_web->tampilProdukTerlaris();
		$data['slider'] = $this->model_web->tampilSlider();
		$this->load->view('web_view/index');
		$this->load->view('web_view/header');
		$this->load->view('web_view/logo');
		$this->load->view('web_view/baner',$data);
		$this->load->view('web_view/sub_menu');
		$this->load->view('web_view/laris',$data);
		$this->load->view('web_view/content',$data);
		$this->load->view('web_view/footer');
		}

public function statusPesan($id_konsumen='')
	{
		$data['kategori'] = $this->model_kategori->tampilKategori();
		if($id_konsumen==""){
		$id_konsumen = $this->session->userdata('kd_user');
		}
		
		$result = $this->model_pesanan->tampil_status_pesanan($id_konsumen);
		$subdata['result_detail_status'] = $result;
		$dataa['content'] = $this->load->view('web_view/histori',$subdata,TRUE);

		$this->load->view('web_view/index');
		$this->load->view('web_view/header');
		$this->load->view('web_view/logo');
		$this->load->view('web_view/histori',$dataa);
		$this->load->view('web_view/footer');
	}

	public function hapus_cart()
    {

        $data = array(
                'rowid' => $this->uri->segment(3),
                'qty'   => 0);
                $this->cart->update($data);
        header('location:'.site_url().'/home/keranjang_belanja');
    }


}

/* End of file home.php */
/* Location: ./application/controllers/home.php */