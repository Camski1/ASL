<?php

	class Head_get extends CI_Model{

		function headLine($type1){
			$sql = "Select * from Stories where Stories.type = ? LIMIT 1";
			$query = $this->db->query($sql, array($type1));
			return $query->result();
		}
	}