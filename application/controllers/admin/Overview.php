<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}
    
	public function index()
	{
        // load view admin/overview.php
        $this->load->view("admin/overview");
        //$data["tblcycle1"] = $this->overview_model->getAll();
        //$this->load->view("admin/cycle1", $data);//render ke overview
	}
    
    
}

?>