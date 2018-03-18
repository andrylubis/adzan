<?php
class Introduce extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('m_login');
		if($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
	}

	function index() {
		$data['category'] = $this->m_login->get_category();
		$data['introduce'] = $this->m_login->get_introduce();

		$this->load->view('header', $data);
		$this->load->view('Introduce',$data);
		$this->load->view('footer');
	}

	public function create() {
		$this->m_login->set_news();
		redirect('Introduce');
	}
}