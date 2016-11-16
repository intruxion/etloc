<?php

class User_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();

	}

	public function view()
	{
		/*$this->db->select('*');
		$this->db->from('user_login');*/
		$query = $this->db->get('userdetail');
		return $query->result_array();
	}

	public function validate($data)
	{
		//$user_password = $data['password'];
		$query = $this->db->get_where('userdetail', array('No_Kp' => $data['No_Kp'],'Password' => $data['Password']));
		$result = $query->row_array();
        return $result;

	}

	public function details($id)
	{
		$query = $this->db->get_where('userdetail', array('No_Kp' => $id));

		$result = $query->row_array();
        return $result;
	}
	
	public function addUser($data)
	{
		
		/* start validation - clarence 16/11 */
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$this->form_validation->set_message('alpha','Invalid Name');
		//$this->form_validation->set_message('valid_email', 'Invalid Email Address');
		$this->form_validation->set_message('required', 'Require');
		/* end validation */
		/* start validate field - clarence 16/11 */
		$this->form_validation->set_rules('Nama', 'Full Name', 'required|alpha');
		//$this->form_validation->set_rules('No_Kp', 'No KP', 'trim|required|max_length[12]');
		/* end validation field */
		
		$new_data = array(
   			'No_Kp' => $data['No_Kp'],
   			'Nama' => $data['Nama'],
   			'Password' => $data['Password1'],
			'alamat1' => $data['alamat1'],
			'alamat2' => $data['alamat2'],
			'alamat3' => $data['alamat3'],
			'Poskod' => $data['Poskod'],
			'kodNegeri' => $data['Negeri'],
			'NoTel' => $data['noTel']
   			);
   		$this->db->insert("userdetail", $new_data);

	}


}

?>



