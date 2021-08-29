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
}