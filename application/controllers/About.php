<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	
	public function index()
	{	
		$data['title'] = "About";
		$this->load->view('header', $data);

		$this->load->view('sidebar');
		$this->load->view('about_content');
		
		$this->load->view('footer');
	}
}
