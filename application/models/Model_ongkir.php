<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_ongkir extends CI_Model {


public function tampilOngkir(){
	$this->db->select('*');
	$this->db->from('ongkir');	
	$query = $this->db->get();
	return $query->result();
}

public function TampilUbahOngkir($id_ongkir){
				$hasil = $this->db->where('id_ongkir', $id_ongkir)
									->limit(1)
									->get('ongkir');
					if($hasil->num_rows>0){
						return $hasil->row();
					}else{
						return array();
					}
			}
public function ubahOngkirFinal($id_ongkir,$harga_ongkir)
{
	$this->db->query("update ongkir set harga_ongkir=$harga_ongkir where id_ongkir='$id_ongkir'");

}

	

}

/* End of file Model_ongkir.php */
/* Location: ./application/models/Model_ongkir.php */