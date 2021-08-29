<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productos_models extends CI_Model {

	public function getProductos(){
		$r = $this->db->query("SELECT * from productos");
		return $r->result();
	}
}