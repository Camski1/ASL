<?php
class insert_model extends CI_Model{
	function __construct() {
	parent::__construct();
	}

	function form_insert($info){
	
	$this->db->insert('Users', $info);
	}

	function insert_story($info){
	
	$this->db->insert('Stories', $info);
	}

	function updateUserInfo($info){

		$cont = $this->session->all_userdata();
		$email = $cont['email'];
	
		$this->db->where('email',$email);
        $this->db->update('Users',$info);

	}

	function deleteStry($info){

		$this->db->where('storyID', $info);
		$this->db->delete('Stories');

	}

	function updateStry($info){
	
		$this->db->where('storyID',$info->storyID);
        $this->db->update('Stories',$info);


	}
	

}
?> 