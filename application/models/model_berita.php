<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_berita extends CI_Model {

public function tampilBerita()
{	
			$hasil = $this->db->get('berita');
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
}

public function simpanBerita($dataBerita){
	$this->db->insert('berita', $dataBerita);
}

public function find($id_berita){
				$hasil = $this->db->where('id_berita', $id_berita)
									->limit(1)
									->get('berita');
					if($hasil->num_rows>0){
						return $hasil->row();
					}else{
						return array();
					}
			}

public function update($id_berita,$data_berita){
				$this->db->where('id_berita',$id_berita)
					 	 ->update('berita',$data_berita);
			 }

public function hapus($id_berita){
				$this->db->where('id_berita',$id_berita)
					 	 ->delete('berita',$data_berita);
			 }

	

}

/* End of file model_berita.php */
/* Location: ./application/models/model_berita.php */