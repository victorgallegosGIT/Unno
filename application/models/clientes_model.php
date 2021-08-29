<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class clientes_model extends CI_Model {

	public function getClientes(){
		$r = $this->db->query("SELECT c.id_condicion_iva, id_cliente, nombre_cliente, telefono_cliente, ciudad_cliente, direccion_cliente, ci.nombre_condicion as condicion_iva, cuit_cliente, email_cliente FROM clientes c, condiciones_iva ci WHERE c.id_condicion_iva = ci.id");
		return $r->result();
	}

	public function getCliente($id){
		$r = $this->db->query("SELECT id_cliente, nombre_cliente, telefono_cliente, ciudad_cliente, direccion_cliente, ci.nombre_condicion as condicion_iva, cuit_cliente, email_cliente 
			FROM clientes c, condiciones_iva ci
		 	WHERE c.id_condicion_iva = ci.id AND c.id_cliente = '$id'");
		return $r->row();
	}

	public function getConditionIva(){
		$r = $this->db->query("SELECT DISTINCT id, nombre_condicion as condicion_iva FROM condiciones_iva");
		return $r->result();
	}

	public function addCliente($data){
		$this->db->insert("clientes", $data);
		return true;
	}

	public function updateCliente($id, $data){
		$this->db->where('id_cliente', $id);
		$this->db->update('clientes', $data);
		return true;
	}

	public function delete($id){
		$this->db->query("DELETE FROM clientes WHERE id_cliente = '$id'");
		return true;
	}
	
}

?>