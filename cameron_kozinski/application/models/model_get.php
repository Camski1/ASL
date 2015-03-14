<?php

	class Model_get extends CI_Model{

		function getData($type){
			$sql = "Select * from Stories where Stories.type = ? LIMIT 6";
			$query = $this->db->query($sql, array($type));
			return $query->result();
		}

		function storyFind($info){
			$sql = "Select * from Stories where Stories.storyID = ?";
			$query = $this->db->query($sql, array($info));
			return $query->result();
		}

		function userFind($email,$password){
			$query = $this->db->select('Users', $email,$password);
			return $query->result();
		}
	}