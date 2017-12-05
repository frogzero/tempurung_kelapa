<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Harga extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dependent_model', 'dep_model', TRUE);
	}
	public function index()
	{
		$data['countries'] = $this->dep_model->get_country_query();
		$this->load->view('welcome_message', $data);
	}
	public function get_province()
	{
		$country_id = $this->input->post('country_id');
		$provinces = $this->dep_model->get_province_query($country_id);
		if(count($provinces)>0)
		{
			$pro_select_box = '';
			foreach ($provinces as $province) {
				//$pro_select_box .='<input type="text" placeholder="'.$province->jumlah.'" value="'.$province->jumlah.'">';
				$pro_select_box .='<input type="text" name="hargaa" value="'.$province->harga.'"  readonly />';
				//$pro_select_box .='<option value="'.$province->id_harga.'">'.$province->harga.'</option>';
			}
			echo json_encode($pro_select_box);
		}
	}

	
	public function get_stok()
	{
		$country_id = $this->input->post('country_id');
		$provinces = $this->dep_model->get_province_query($country_id);
		if(count($provinces)>0)
		{
			$pro_select_box = '';
			$stok1='';
			foreach ($provinces as $province) {
				//$pro_select_box .='<input type="text" placeholder="'.$province->jumlah.'" value="'.$province->jumlah.'">';
				//$pro_select_box .='<input type="text" value="'.$province->harga.'" readonly />';
				$pro_select_box .='<input type="text" name="stok1" value="'.$province->stok.'" class="form-group" />';
	
				//$pro_select_box .='<option value="'.$province->id_harga.'">'.$province->harga.'</option>';
			}
			echo json_encode($pro_select_box);
		}
	}
		public function jumlah_perbarang()
	{
		$country_id = $this->input->post('country_id');
		$provinces = $this->dep_model->get_province_query($country_id);
		if(count($provinces)>0)
		{
			$pro_select_box = '';
			$stok1='';
			foreach ($provinces as $province) {
				//$pro_select_box .='<input type="text" placeholder="'.$province->jumlah.'" value="'.$province->jumlah.'">';
				//$pro_select_box .='<input type="text" value="'.$province->harga.'" readonly />';
				$pro_select_box .='<input type="text" name="jumlah_perbarang1" value="'.$province->jumlah.'" class="form-group"  />';
	
				//$pro_select_box .='<option value="'.$province->id_harga.'">'.$province->harga.'</option>';
			}
			echo json_encode($pro_select_box);
		}
	}
}
