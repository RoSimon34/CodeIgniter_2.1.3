<?php

class Createproject extends CI_Controller {



    public function __construct(){
	    
	 parent :: __construct();
		    
    }
    
    function index(){
	    
	   $this->load->view('templates/header');
	   $this->load->view('projects/createproject');
	   $this->load->view('templates/footer');
	   
    }
}
?>