<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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

	public function authenticate()
	{
		$data['content'] = $this->input->post();
		$this->load->model('user_model');

		$data['logged'] = $this->user_model->validate($data['content']);
		$this->session->set_userdata('session_No_Kp', $data['logged']['No_Kp']);
		$this->session->set_userdata('session_Nama', $data['logged']['Nama']);
		//echo $data['logged']['Nama'];
		//$this->session->set_userdata($sessionVar);
		
		$data['userdetail'] = $this->user_model->view();

		if($this->session->userdata('session_No_Kp'))
		{
			$this->load->view('berjaya', $data);
		}
		else
		{
			echo "fail";
			$this->load->view('login');
		}
		
		
	}

	public function details($id)
	{
		$this->load->model('user_model');
		$data['details'] = $this->user_model->details($id);
		
		$this->load->view('profile', $data);

	}
	
	public function viewAddNew()
	{
		$this->load->model('user_model');
		$this->load->model('negeri_model');
		//$this->session->userdata('sessionVar');
		//$data['details'] = $this->user_model->details($id);
		$data['negeri_list'] = $this->negeri_model->get_dropdown_list();
		$this->load->view('addUser',$data);
	}
	
	public function addUser()
	{
		//echo "test";
		
		$data['content'] = $this->input->post();
		$this->load->model('user_model');

		$this->user_model->addUser($data['content']);
		//$data['userlist'] = $this->user_model->view();
		//$this->load->view('home', $data);

		//$this->user_model->addUser();
		//$this->load->view('profile', $data);
		
	}
}

