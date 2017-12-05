<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('model_produk','model_kategori','model_rekening','model_web','model_konsumen','model_stok','model_order','model_rekening'));
		$this->load->library('cart');
		$this->load->helper(array('form', 'url'));  
	}


	public function index(){
		$kode = $this->model_order->kode_pesanan();
		$kode_bayar = $this->model_order->kode_bayar();
	    foreach ($this->cart->contents() as $items) {
		$data=array(
				'id_produk' => $items['option'],
	            'id_pesan' => $kode,
	            'jml_pesan' => $items['qty'],
	            'id_harga' => $items['a_harga']
				);
		$this->model_order->simpandetil($data);	
		$this->model_order->pembeli($items['qty'],$items['option']);
		$this->model_order->update_stok($items['qty'],$items['a_harga']);
		}
		$besok = mktime(0,0,0, date('m'),date('d')+1,date('Y'));
		$today = date('Y-m-d');
		$nama = $this->input->post('nama');
		$totalpesan = $this->input->post('totalpesan');
		$total = $this->input->post('totalpesan');
		$alamat = $this->input->post('alamat');
		$kota = $this->input->post('kota');
		$provinsi = $this->input->post('provinsi');
		$nohp = $this->input->post('nohp');
		$kodepos = $this->input->post('kodepos');
		$total_biaya = $this->input->post('total_biaya');

		$data_pesanan = array(
								'id_pesan' => $kode,
								'id_konsumen' => $this->session->userdata('kd_user'),
								'tgl_pesan' => $today,
								'nama_penerima' => $this->session->userdata('nama_penerima'),
								'alamat' =>$this->session->userdata('alamat_penerima'),
								'kota' =>$this->session->userdata('kota_penerima'),
								'provinsi' => $this->session->userdata('provinsi_penerima'),
								'kodepos' => $this->session->userdata('kodepos_penerima'),
								'no_hp' => $this->session->userdata('nohp_penerima')
								
							);
	    $this->model_order->simpan($data_pesanan);
	    
	    //simpan data  pesanan
	    
	    $data_bayar = array(
								'id_bayar' => $kode_bayar,
								'id_pesan' => $kode,
								'total_bayar' => $total_biaya,
								'status' => 'Belum Konfirmasi',
								'resi' => 'Sedang Di Proses',
								'kurir' => 'Sedang Di Proses'
								
							);
	    $this->model_order->simpanbayar($data_bayar);
	    $this->cart->destroy();
	    echo '<script language="javascript">';
			echo 'alert("Terimakasih Atas Pesanan Anda. Pesanan Anda Akan kami proses. Jangan Lupa Konfirmasi Pesanan Anda Jika Sudah melakukan transfer kerekening kami")';
			echo '</script>';
	  echo '<script type="text/javascript">';    
	  	    
      echo 'window.location.assign("'.site_url().'/Order/invoice")'; 
      echo '</script>';
	  			
	    }
public function invoice()
{
	
	    $kode_bayar = $this->model_order->lihat_kode();
	    foreach ($kode_bayar as $data) {
	    	$id_pesan = $data->id; 	
	    }
	    $dataa['rekening'] = $this->model_rekening->tampilRekening();
	    $dataa['kode'] = $this->model_order->kode_pesanan();
	    $dataa['invoice'] = $this->model_order->tampilinv($id_pesan);
	    $dataa['dataaa'] = $this->model_order->tampil_invoice($id_pesan);
	    $this->load->view('web_view/invoice/invoice',$dataa);

//-------------------KIrim Email--------------------------------//
	   /* $ci = get_instance();
        $ci->load->library('email');
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.gmail.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "delarosa@gmail.com";
        $config['smtp_pass'] = "J@ngkrik_bos";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";      
        
        $ci->email->initialize($config);
        $data_email = $this->model_order->lihat_email();
 
        $email_penerima=  $data_email->email;

        ob_start();
        $dataa['kode'] = $this->model_order->kode_pesanan();
	    $dataa['invoice'] = $this->model_order->tampilinv($id_pesan);
	    $dataa['dataaa'] = $this->model_order->tampil_invoice($id_pesan);
	    $this->load->view('web/invoice/invoice',$dataa);
        $html =  ob_get_contents();
        ob_end_clean();

       
 
        $ci->email->from('malikamodemail@gmail.com', 'Malika Mode');
        $list = array($email_penerima);
        $ci->email->to($list);
        $ci->email->subject('Invoice ');
        $ci->email->message(  $html);
        $this->email->send();
        */
 //--------------------------------------------Stop Kirim----------------------//

}

public function Lihatinvoice($id_pesan){

	    $dataa['rekening'] = $this->model_rekening->tampilRekening();
	    $dataa['invoice'] = $this->model_order->tampilinv($id_pesan);
	    $dataa['dataaa'] = $this->model_order->tampil_invoice($id_pesan);
	    	$this->load->view('web_view/invoice/HistoriInvoice',$dataa);

	    }

}