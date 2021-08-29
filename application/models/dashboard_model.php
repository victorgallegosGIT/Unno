<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard_model extends CI_Model {

	public function getLicenseTime(){
		$this->db->where("id", "1");
		$resultado = $this->db->get("license");
		return $resultado->row();
	}
	
}