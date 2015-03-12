<?php

	class Model_get extends CI_Model{

		function getData($type){
			$query = $this->db->get_where("Stories", array('userName' => $type));
			return $query->result();
		}
	}