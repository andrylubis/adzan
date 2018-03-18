<?php
class M_login extends CI_Model {
	function cek_login($table, $where) {
		return $this->db->get_where($table, $where);
	}

	public function ambil_data() {
		$query = $this->db->get('stats');
		return $query->result_array();
	}

	public function get_category() {
		$query = $this->db->get('category');
		return $query->result_array();
	}

	function ambil_data_admin() {
		return $this->db->get('admin');
	}


	public function set_news() {
		$data = array(
			'description' => $this->input->post('description')
		);

		return $this->db->insert('introduce',$data);
	}

	public function get_introduce() {
		$query = $this->db->get('introduce');
		return $query->result_array();
	}
}