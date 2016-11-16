<?php

class Negeri_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	function get_dropdown_list()
		{
		$this->db->from('negeri');
		$this->db->order_by('namaNegeri');
		$result = $this->db->get();
		$return = array();
		if($result->num_rows() > 0) {
			foreach($result->result_array() as $row) {
				$return[$row['kodNegeri']] = $row['namaNegeri'];
				}
		}

        return $return;

}

}

?>



