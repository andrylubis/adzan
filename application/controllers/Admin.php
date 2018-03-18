<?php
class Admin extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('m_login');	
		if($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
	}
	function index() {

		$data['stats']    = $this->m_login->ambil_data();
		$data['category'] = $this->m_login->get_category();

		$this->load->view('header', $data);
		$this->load->view('admin', $data);
		$this->load->view('footer');
	}
}