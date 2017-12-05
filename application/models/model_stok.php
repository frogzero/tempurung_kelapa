<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_stok extends CI_Model {

public function cek_stok()
		{
			$this->db->select('*');
			$this->db->from('stok');
			 $hasil = $this->db->get();
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}

					}
	
public function simpanSize($datastok)
 {
 	$this->db->insert('stok', $datastok);
 }

 public function update_stok($datastok,$id_produk)
 {
 	$this->db->where('id_produk', $id_produk)
 			 ->update('stok',$datastok);
 }

 public function update_stok_harga($datastok,$id_harga)
 {
 	$this->db->where('id_harga', $id_harga)
 			 ->update('harga',$datastok);
 }

 public function hapusStok($id_produk)
 {
 	$this->db->where('id_produk',$id_produk)
			 		->delete('stok');
 }

 public function tampilStok($id_produk){
 	$this->db->select('*')
 			 ->from('stok')
 			 ->where('id_produk',$id_produk);
 	$query=$this->db->get();
 	return $query->result();
 }

 public function tampilSemuaStokHarga(){
 $hasil = $this->db->get('harga');
					if($hasil->num_rows>0){
						return $hasil->row();
					}else{
						return array();
					}
 }
 

 public function cekStok($id_produk){
 	$hasil = $this->db->where('id_produk', $id_produk)
									->limit(1)
									->get('harga');
					if($hasil->num_rows>0){
						return $hasil->row();
					}else{
						return array();
					}
 }

 public function LihatIdHarga($id_harga){
 		$this->db->select('*');
			$this->db->from('harga');
			$this->db->where('id_harga', $id_harga);
			 $hasil = $this->db->get();
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
 }

 public function cekStokHarganew(){
 	$this->db->select('*');
			$this->db->from('harga');
			 $hasil = $this->db->get();
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
 }


 public function simpanStokBaru($data_stok_harga){
 	$this->db->insert('harga', $data_stok_harga);
 }

 public function findProduk($id_produk){
				$hasil = $this->db->where('id_produk', $id_produk)
									->limit(1)
									->get('produk');
					if($hasil->num_rows>0){
						return $hasil->row();
					}else{
						return array();
					}
			}

public function findProdukHarga($id_produk){
				$hasil = $this->db->where('id_produk', $id_produk)
									->limit(1)
									->get('harga');
					if($hasil->num_rows>0){
						return $hasil->row();
					}else{
						return array();
					}
			}

 function ketersediaanStok(){
 	$this->db->select('*');
 	$this->db->from('harga');
 	$this->db->join('produk', 'harga.id_produk = produk.id_produk');
 	$hasil= $this->db->get();
 	return $hasil->result();
 }

 public function tampilStokHarga($id_harga){
 	$this->db->select('*')
 			 ->from('harga')
 			 ->where('id_harga',$id_harga);
 	$query=$this->db->get();
 	return $query->result();
 }
  public function cekStokHarga($id_harga){
 	$hasil = $this->db->where('id_harga', $id_harga)
									->limit(1)
									->get('harga');
					if($hasil->num_rows>0){
						return $hasil->row();
					}else{
						return array();
					}
 }
public function tampilSemuaHarga(){

 	$query=$this->db->get('harga');
 	return $query->result();
 }
}

/* End of file model_stok.php */
/* Location: ./application/models/model_stok.php */