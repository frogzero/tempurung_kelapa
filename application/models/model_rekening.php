<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_rekening extends CI_Model {

public function tampilRekening(){
	$this->db->select('*');
	$this->db->from('rekening');	
	$query = $this->db->get();
	return $query->result();
}	
public function simpanRekeningDB($data_rekening){
	$this->db->insert('rekening', $data_rekening);
}

public function hapusRekening($id_rekening){
	$this->db->where('id_rekening', $id_rekening);
$this->db->delete('rekening');
}

}

/* End of file model_rekening.php */
/* Location: ./application/models/model_rekening.php */