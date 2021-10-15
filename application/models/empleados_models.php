<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class empleados_models extends CI_Model {

	public function getEmpleados(){
		$r = $this->db->query("SELECT * from empleados");
		return $r->result();
	}
	public function delete($id){
		$this->db->query("DELETE FROM empleados WHERE id_empleado = '$id'");
		return true;
	}
	public function addCliente($data){
		$this->db->insert("clientes", $data);
		return true;
	}
}