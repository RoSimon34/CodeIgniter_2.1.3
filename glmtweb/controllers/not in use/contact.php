<?php

class Contact extends CI_Controller {



    public function __construct(){
	    
	 parent :: __construct();
		    
    }
    
	    function index(){
		    
		   $this->load->view('templates/header');
		   $this->load->view('pages/contact');
		   $this->load->view('templates/footer');
	   
    }
}
?>