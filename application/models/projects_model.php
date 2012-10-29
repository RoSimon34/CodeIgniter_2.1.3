<?php
class Projects_model extends CI_Model {

	public function __construct() {
	
		$this->load->database();
	}
	
	public function get_project($slug) {
		
		$query = $this->db->get_where('id', array('slug' => $slug));
		return $query->row_array();
		
	}
	
	public function get_projects() {//don't need a slug because get_projects would be all of them
	
		
		$query = $this->db->get('projects');
		return $query->result_array();
		
	}
	
	public function new_projects() { //you should rename this so it makes sense, new_project
	/*

		$this->load->helper('url');
		
		$slug = url_title($this->input->post('title'), 'dash', TRUE);
		
*/
		$data = array(
			'title' => $this->input->post('title'),
			/* 'slug' => $slug, */
			'location' => $this->input->post('location'),
			'text' => $this->input->post('text')
		);
		
		return $this->db->insert('projects', $data);
	}
	
	public function delete_project() { 
	
	
	}
	
	public function update_project() { 
	
	
	}

	
}
?>