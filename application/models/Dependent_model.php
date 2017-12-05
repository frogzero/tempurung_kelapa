<?php
class Dependent_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function get_country_query()
	{
		$query = $this->db->get('harga');
		return $query->result();
	}
	public function get_province_query($country_id)
	{
		$query = $this->db->where('id_harga', $country_id);
		$query = $this->db->get('harga');
		return $query->result();
	}
}