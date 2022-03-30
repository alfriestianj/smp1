<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('galeri/galeri');
		$this->load->view('templates/footer');
		
	}
}