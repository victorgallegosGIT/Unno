<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lockScreen extends CI_Controller {

	public function index(){
		$this->load->view("admin/lockScreen/lockScreen");
	}

}
?>