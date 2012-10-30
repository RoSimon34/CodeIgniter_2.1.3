<?php
class Projects extends CI_Controller {

	public function __construct() {
	
		parent::__construct();
		$this->load->model('projects_model');
	}
	
	public function index() {
	
		$data['projects'] = $this->projects_model->get_projects();
		$data['title'] = 'News archive';
	
		$this->load->view('templates/header', $data);
		$this->load->view('projects/projectsView', $data);
		$this->load->view('templates/footer');
	}

	public function view($slug) {
	
		/* $data['news'] = $this->news_model->get_news($slug); */
		$data['projects_item'] = $this->projects_model->get_projects($slug);

		if (empty($data['projects_item'])) {
		
			show_404();
		}

		$data['title'] = $data['projects_item']['title'];
	
		$this->load->view('templates/header', $data);
		$this->load->view('projects/projectview', $data);
		$this->load->view('templates/footer');
	}
	
	public function create() {
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Create a news item';
		
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'text', 'required');
		
		if ($this->form_validation->run() === FALSE) {
		
			$this->load->view('templates/header');	
			$this->load->view('projects/create');
			$this->load->view('templates/footer');
			
		}else {
		
			$this->projects_model->new_projects();
			redirect('projects/project');
		}
	}
	private function check_project_name(){
		
		
		
	}
	
	
	public function createproject()
	 {
		 $this->load->view('templates/header');
		 $this->load->view('projects/create');
		 //$this->load->view('templates/footer');
	 }
	 
	public function deleteProject($id){

        // delete person
        $this->projects_model->delete_project($id);
        // redirect to person list page
        redirect('projects');

	}
	public function project()
	{
		//get the project id, and add it as a slug to the url
		$this->load->view('templates/header');
		$this->load->view('projects/projectView');
		$this->load->view('templates/footer');
	}
	public function file_test()
	{
		$this->load->view('fileupload');
		
	}
}
?>