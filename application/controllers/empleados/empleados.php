<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class empleados extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('empleados_models');
	}

	public function index(){

		$data = array(
			'empleados' => $this->empleados_models->getEmpleados()
		);	

		$this->load->view('layouts/headerNewDesign');
		$this->load->view('layouts/asideNewDesign');
		$this->load->view('admin/empleados/empleados', $data);
		$this->load->view('layouts/footerNewDesign');
	}
	public function deleteEmpleados($id){

		$data = array( 'success' => false );
		
		if($this->empleados_models->delete($id)){
			$data['success'] = true;
		}

		echo json_encode($data);
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
}