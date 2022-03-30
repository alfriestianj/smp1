<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('fasil');
		$this->load->view('templates/footer');
		
	}
}