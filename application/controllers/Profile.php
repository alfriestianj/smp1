<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function vismis()
	{
		$this->load->view('templates/header');
		$this->load->view('profile/vismis');
		$this->load->view('templates/footer');
		
	}

	public function struktur()
	{
		$this->load->view('templates/header');
		$this->load->view('profile/struktur');
		$this->load->view('templates/footer');
		
	}

	public function gurukaryawan()
	{
		$this->load->view('templates/header');
		$this->load->view('profile/gurukar');
		$this->load->view('templates/footer');
		
	}
	public function prestasi()
	{
		$this->load->view('templates/header');
		$this->load->view('profile/prestasi');
		$this->load->view('templates/footer');
		
	}

}