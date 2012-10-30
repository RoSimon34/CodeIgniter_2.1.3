<?php

class Pages extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('projects_model'); //loads the model to be used throughout the controller
		$this->load->model('users_model');
		$this->load->model('user','',TRUE);
		$this->load->helper('url');
	}
	
	public function index()
	{
		$page = 'home';
		$data['title'] = ucfirst($page); // Capitalize the first letter
		
		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}
	public function about()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/about');
		$this->load->view('templates/footer');
	}
	public function users()
	{
		$data['users'] = $this->users_model->get_users();
		$data['firstname'] = 'User archive';
	
		$this->load->view('templates/header', $data);
		$this->load->view('users/usersView', $data);
		$this->load->view('templates/footer');
	}
	
	public function projects()
	{
		$data['projects'] = $this->projects_model->get_projects();
		$data['title'] = 'News archive';
	
		$this->load->view('templates/header', $data);
		$this->load->view('projects/projectsView', $data);
		$this->load->view('templates/footer');
	}
	public function project($proj)
	{
		$data['projects_item'] = $this->projects_model->get_projects($proj);

		if (empty($data['projects_item'])) {
		
			show_404();
		}

		$data['title'] = $data['projects_item']['title'];
	
		$this->load->view('templates/header', $data);
		$this->load->view('projects/view', $data);
		$this->load->view('templates/footer');
	}
	
	public function create() {
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Create a news item';
		
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'text', 'required');
		
		if ($this->form_validation->run() === FALSE) {
		
			$this->load->view('templates/header', $data);	
			$this->load->view('projects/create');
			$this->load->view('templates/footer');
			
		}else {
		
			$this->projects_model->set_projects();
			$this->load->view('projects/success');
		}
	}
	
	public function contact()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/contact');
		$this->load->view('templates/footer');
	}
	public function login(){
    	$this->load->view('templates/header');
    	$this->load->helper(array('form', 'url'));
    	$this->load->view('pages/login_view');
	}
	public function verifylogin()
	 {
	   //This method will have the credentials validation
	   $this->load->library('form_validation');
	
	   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
	   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
	
	   if($this->form_validation->run() == FALSE)
	   {
	     //Field validation failed.  User redirected to login page
	     $this->load->view('templates/header');
	     $this->load->view('pages/login_view');
	     $this->load->view('templates/footer');
	   }
	   else
	   {
	     //Go to private area
	     redirect('admin');
	   }
	
	 }

	 public function check_database($password)
	 {
	   //Field validation succeeded.  Validate against database
	   $username = $this->input->post('username');
	
	   //query the database
	   $data = $this->user->login();
	
	   if($data)
	   {
	     $this->session->set_userdata($data);
	     return TRUE;
	   }
	   else
	   {
	     $this->form_validation->set_message('check_database', 'Invalid username or password');
	     return false;
	   }
	 }
	
}
?>