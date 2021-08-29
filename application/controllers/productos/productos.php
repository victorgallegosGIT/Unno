<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('condiciones_iva');
		$this->load->model('clientes_model');
		$this->load->model('productos_models');
	}

	public function index(){

		$data = array(
			'productos' => $this->productos_models->getProductos()
		);	

		$this->load->view('layouts/headerNewDesign');
		$this->load->view('layouts/asideNewDesign');
		$this->load->view('admin/productos/productos', $data);
		$this->load->view('layouts/footerNewDesign');
	}
}