<?php

class Admin extends CI_Controller {



    public function __construct(){
	    
	 parent :: __construct();
	 //if the user is not logged in redirect to pages
	 $this->load->model('user','',TRUE);
	 $this->load->helper('url');
	 if(!$this->session->userdata('logged_in')){
		 
		 redirect('pages/index');
	 };
		    
    }
    
    public function index(){
	   $data['username'] = $this->session->userdata('username'); 
	   $this->load->view('templates/header');
	   $this->load->view('pages/admin_view', $data);
	   $this->load->view('templates/footer');
	   
    }
    
	public function logout()
	{
		$data = array(
				'username'=> '',
				'id'=> '',
				'logged_in'=> FALSE
			
		);
		$this->session->unset_userdata($data);
		redirect('pages');
	}
}
?>