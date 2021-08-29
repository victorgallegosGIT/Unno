<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class empleados_models extends CI_Model {

	public function getEmpleados(){
		$r = $this->db->query("SELECT * from empleados");
		return $r->result();
	}
}