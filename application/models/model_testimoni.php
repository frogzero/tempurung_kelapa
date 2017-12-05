<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_testimoni extends CI_Model {

public function tampilTestimoni()
{	
			$hasil = $this->db->get('testimoni');
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
}

public function simpantestimoni($dataTestimoni){
	$this->db->insert('testimoni', $dataTestimoni);
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
				$this->db->where('id_testimoni',$id_berita)
					 	 ->delete('testimoni',$data_berita);
			 }

	

}

/* End of file model_berita.php */
/* Location: ./application/models/model_berita.php */