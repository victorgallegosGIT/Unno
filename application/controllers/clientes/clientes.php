<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class clientes extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('condiciones_iva');
		$this->load->model('clientes_model');
	}

	public function index(){
		$data = array(
			'condiciones_iva' => $this->clientes_model->getConditionIva(),
			'clientes' => $this->clientes_model->getClientes(),
		);

		$this->load->view('layouts/headerNewDesign');
		$this->load->view('layouts/asideNewDesign');
		$this->load->view('admin/clientes/clientes3', $data);
		$this->load->view('layouts/footerNewDesign');
	}

	public function addCliente(){
		$data = array(
			'nombre_cliente' => $this->input->post('nombres'),
			'telefono_cliente' => $this->input->post('telefono'),
			'ciudad_cliente' => $this->input->post('ciudad'),
			'direccion_cliente' => $this->input->post('direccion'),
			'id_condicion_iva' => $this->input->post('condicion_iva'),
			'cuit_cliente' => $this->input->post('cuit'),
			'email_cliente' => $this->input->post('email'),
		);

		$valid = array( 'success' => false );

		if($this->clientes_model->addCliente($data)){
			$valid['success'] = true;
		}

		echo json_encode($valid);
	}

	public function selectClientToEdit($id){
		$data = array(
			'clientEditable' => $this->clientes_model->getCliente($id),
		);

		echo json_encode($data);
	}

	public function deleteCliente($id){

		$data = array( 'success' => false );
		
		if($this->clientes_model->delete($id)){
			$data['success'] = true;
		}

		echo json_encode($data);
	}

	public function updateCliente($id){
		$validation = array( 'validation' => false );

		$nombre_cliente = $this->input->post("nombres");
		$telefono_cliente = $this->input->post("telefono");
		$ciudad_cliente = $this->input->post("ciudad");
		$direccion_cliente = $this->input->post("direccion");
		$id_condicion_iva = $this->input->post("condicion");
		$cuit_cliente = $this->input->post("cuit");
		$email_cliente = $this->input->post("email");

		$data = array( 'nombre_cliente' => $nombre_cliente,
			'telefono_cliente' => $telefono_cliente,
			'ciudad_cliente' => $ciudad_cliente,
			'direccion_cliente' => $direccion_cliente,
			'id_condicion_iva' => $id_condicion_iva,
			'cuit_cliente' => $cuit_cliente,
			'email_cliente' => $email_cliente

		);

		if($this->clientes_model->updateCliente($id, $data)){
			$validation['validation'] = true;
		}

		echo json_encode($validation);

	}
}