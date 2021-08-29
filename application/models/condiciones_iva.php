<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class condiciones_iva extends CI_Model {

	public function getCondicion_iva(){
		$r = $this->db->query("SELECT * FROM condiciones_iva");
		return $r->result();
	}

}

?>