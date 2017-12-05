<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_web extends CI_Model {

function hitung_isi_tabel($tabel,$seleksi)
		{
		$q = $this->db->query("SELECT * from $tabel $seleksi");
		return $q;
		}
		
public function tampilBeritaWeb($limit,$offset){
			$this->db->order_by('id_berita','DESC');
			$this->db->limit($limit,$offset);		
			$hasil = $this->db->get('berita');
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
						
 }

 public function tampil_ongkir(){	

			$hasil = $this->db->get('ongkir');
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
						
 }


public function tampilTestimoni($limit,$offset){
			$this->db->order_by('id_testimoni','DESC');
			$this->db->limit($limit,$offset);		
			$hasil = $this->db->get('testimoni');
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
						
 }


function hitung_isi_tabel_perkategori($tabel,$seleksi,$id_kategori)
		{
		$q = $this->db->query("SELECT * from $tabel $seleksi where id_kategori='$id_kategori'");
		return $q;
		}

public function tampilProdukTerlaris(){
	       $this->db->select('*');			
		   $this->db->from('produk');
		   $this->db->order_by('pembeli','DESC');
		   $this->db->limit(6);
		    $query = $this->db->get(); 
	return $query->result();
		}

		public function tampilBerita(){
	       $this->db->select('*');			
		   $this->db->from('berita');
		   $this->db->order_by('id_berita','DESC');
		   $this->db->limit(5);
		    $query = $this->db->get(); 
	return $query->result();
		}

		public function tampilProdukTerlarisDetail(){
	       $this->db->select('*');			
		   $this->db->from('produk');
		   $this->db->order_by('pembeli','DESC');
		   $this->db->limit(3);
		    $query = $this->db->get(); 
	return $query->result();
		}

public function lihatBerita($id_berita){
 	$this->db->select('*')
 			 ->from('berita')
 			 ->where('id_berita',$id_berita);
 	$query=$this->db->get();
 	return $query->result();
 }
	
public function lihatTestimoni($id_berita){
 	$this->db->select('*')
 			 ->from('testimoni')
 			 ->where('id_testimoni',$id_berita);
 	$query=$this->db->get();
 	return $query->result();
 }
	
public function tampil_ongkir_final(){
 	$hasil = $this->db->select('harga_ongkir')
 					->where('provinsi_tujuan', $this->session->userdata('provinsi_penerima'))
									->get('ongkir');
					if($hasil->num_rows>0){
						return $hasil->row();
					}else{
						return array();
					}
 }

public function tampilStok($id_produk){
 	$this->db->select('*')
 			 ->from('stok')
 			 ->where('id_produk',$id_produk);
 	$query=$this->db->get();
 	return $query->result();
 }
		
public function tampilPerKategori($id_kategori,$limit,$offset){
			$this->db->order_by('id_produk','DESC');
			$this->db->where('id_kategori', $id_kategori);
			$this->db->limit($limit,$offset);		
			$hasil = $this->db->get('produk');
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
						
 }
 public function lihatDetail($id_produk){
	 $this->db->select('*'); 
  	 $this->db->from('produk');
 	 $this->db->where('id_produk',$id_produk);
 	 $query = $this->db->get(); 
	return $query->result();
			 }

public function tampilSlider(){
	$query= $this->db->get('slider');
	return $query->result();
}

	

}

/* End of file model_web.php */
/* Location: ./application/models/model_web.php */