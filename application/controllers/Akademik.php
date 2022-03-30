<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akademik extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('akademik/kalender');
		$this->load->view('templates/footer');
		
	}
	public function kuri()
	{
		$this->load->view('templates/header');
		$this->load->view('akademik/kurikulum');
		$this->load->view('templates/footer');
		
	}
}