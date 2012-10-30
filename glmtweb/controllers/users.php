<?php
class Users extends CI_Controller {

	public function __construct() {
	
		parent::__construct();
		$this->load->model('users_model');
	}
	
	public function index() {
	
		$data['users'] = $this->users_model->get_users();
		$data['firstname'] = 'User archive';
	
		$this->load->view('templates/header', $data);
		$this->load->view('users/usersView', $data);
		$this->load->view('templates/footer');
	}

	public function view($id) {
	
		/* $data['news'] = $this->news_model->get_news($id); */
		$data['users_item'] = $this->users_model->get_users($id);

		if (empty($data['users_item'])) {
		
			show_404();
		}

		$data['firstname'] = $data['users_item']['firstname'];
	
		$this->load->view('templates/header', $data);
		$this->load->view('users/usersView', $data);
		$this->load->view('templates/footer');
	}
	
	public function createUser() {
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['firstname'] = 'Add an employee';
		
		$this->form_validation->set_rules('firstname', 'firstname', 'required');
		$this->form_validation->set_rules('lastname', 'lastname', 'required');
		$this->form_validation->set_rules('position', 'position', 'required');
		$this->form_validation->set_rules('info', 'info', 'required');
		
		if ($this->form_validation->run() === FALSE) {
		
			$this->load->view('templates/header', $data);	
			$this->load->view('users/createUser');
			$this->load->view('templates/footer');
			
		}else {
		
			$this->users_model->set_users();
			redirect('users');
		}
	}
	
	function deleteUser($id){

        // delete person
        $this->users_model->delete_user($id);
        // redirect to person list page
        redirect('users');

	}
	
	
	function editUser($id){
	
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['firstname'] = 'Edit an employee';
		
		$this->form_validation->set_rules('firstname', 'firstname', 'required');
		$this->form_validation->set_rules('lastname', 'lastname', 'required');
		$this->form_validation->set_rules('position', 'position', 'required');
		$this->form_validation->set_rules('info', 'info', 'required');
		
		if ($this->form_validation->run() === FALSE) {
		
			$this->load->view('templates/header', $data);	
			$this->load->view('users/editUser');
			$this->load->view('templates/footer');
			
		}else {
		
			$this->users_model->update_user($id);
			redirect('users');
		}
	}
	
	
	public function createU()
	 {
		 $this->load->view('templates/header');
		 $this->load->view('users/createUser');
		 $this->load->view('templates/footer');
	 }
}
?>