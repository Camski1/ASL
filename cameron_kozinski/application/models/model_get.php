<?php

	class Model_get extends CI_Model{

		function getData($type){
			$sql = "Select * from Stories where Stories.type = ? ORDER BY storyID desc LIMIT 6";
			$query = $this->db->query($sql, array($type));
			return $query->result();
		}

		function storyFind($info){
			$sql = "Select * from Stories where Stories.storyID = ?";
			$query = $this->db->query($sql, array($info));
			return $query->result();
		}

		function userFind(){
			$this->db->where('email', $this->input->post('email'));
			$this->db->where('password', $this->input->post('password'));
			$query = $this->db->get('Users');

			if ($query->num_rows() == 1) {
				return TRUE;
			}else{
				return FALSE;
			}
		}

		function userProfile(){
			$cont = $this->session->all_userdata();
			$email = $cont['email'];
			$sql = "Select * from Users where Users.email = '$email'";
			$query = $this->db->query($sql, $email);
			return $query->result();
		}

		function userProfileStories(){
			$cont = $this->session->all_userdata();
			$email = $cont['email'];
			$sql = "Select * from Stories where Stories.email = '$email'";
			$query = $this->db->query($sql, $email);
			return $query->result();
		}

		function getAllStry($type){
			$sql = "Select * from Stories where Stories.type = ? ORDER BY storyID desc";
			$query = $this->db->query($sql, array($type));
			return $query->result();
		}
	}