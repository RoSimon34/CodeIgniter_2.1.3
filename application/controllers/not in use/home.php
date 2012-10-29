<?php

class Home extends CI_Controller {



    public function __construct(){
	    
	 parent :: __construct();
		    
    }
    
    function index(){
	    
	   $this->load->view('templates/header');
	   $this->load->view('pages/home');
	   $this->load->view('templates/footer');
	   
    }
}
?>