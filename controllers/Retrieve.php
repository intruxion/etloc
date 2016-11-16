<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Retrieve extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		//$this->load->library('session');

	}

	public function index()
	{
		$this->load->view('login');
	}

	public function getNegeri()
	{
		$this->load->model('negeri_model');

		//$data['negeri'] = $this->negeri_model->retrieve();
		
		$data['negeri_list'] = $this->negeri_model->get_dropdown_list();
		$this->load->view('my_view_file', $data);
	}

	
}

