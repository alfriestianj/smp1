<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kesiswaan extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('kesiswaan/ekstra');
		$this->load->view('templates/footer');
		
	}
}