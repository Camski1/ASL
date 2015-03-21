<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aysi_news extends CI_Controller {
	public function index()
	{
		$this->home();
	}

	public function profile()
	{	
		
		if ($this->session->userdata('is_logged_in')) {
			$this->load->model('model_get');
			$data["results"] = $this->model_get->userProfile();
			$story["result"] = $this->model_get->userProfileStories();
			$login_showUser["result"] = '<a href="http://localhost:8888/cameron_kozinski/index.php/Aysi_news/logout">Logout</a><br/>';
			$this->load->view('head');
			$this->load->view('nav',$login_showUser);
			$this->load->view('profile', $data);
			$this->load->view('userStories',$story);
			$this->load->view('footer');
		}else{
			$this->join();
		}

		
	}

	public function home()
	{	
		if ($this->session->userdata('is_logged_in')) {
			$login_showUser["result"] = '<a href="http://localhost:8888/cameron_kozinski/index.php/Aysi_news/logout">Logout</a><br/>';
		}else{
			$login_showUser["result"] = '<a href="http://localhost:8888/cameron_kozinski/index.php/Aysi_news/join">Sign In | Sign Up</a>';
		}

		$this->load->model('model_get');
		$data["results"] = $this->model_get->getData('US');
		$this->load->view('head');
		$this->load->view('nav', $login_showUser);
		$this->load->view('content', $data);
		$this->load->view('footer');
	}

	public function us()
	{	
if ($this->session->userdata('is_logged_in')) {
			$login_showUser["result"] = '<a href="http://localhost:8888/cameron_kozinski/index.php/Aysi_news/logout">Logout</a><br/>';
		}else{
			$login_showUser["result"] = '<a href="http://localhost:8888/cameron_kozinski/index.php/Aysi_news/join">Sign In | Sign Up</a>';
		}

		$this->load->model('model_get');
		$data["results"] = $this->model_get->getData('US');
		$this->load->view('head');
		$this->load->view('nav',$login_showUser);
		$this->load->view('content', $data);
		$this->load->view('footer');
	}

	public function world()
	{	
		if ($this->session->userdata('is_logged_in')) {
			$login_showUser["result"] = '<a href="http://localhost:8888/cameron_kozinski/index.php/Aysi_news/logout">Logout</a><br/>';
		}else{
			$login_showUser["result"] = '<a href="http://localhost:8888/cameron_kozinski/index.php/Aysi_news/join">Sign In | Sign Up</a>';
		}

		$this->load->model('model_get');
		$data["results"] = $this->model_get->getData('World');
		$this->load->view('head');
		$this->load->view('nav',$login_showUser);
		$this->load->view('content', $data);
		$this->load->view('footer');
	}

	public function sciTech()
	{	
		if ($this->session->userdata('is_logged_in')) {
			$login_showUser["result"] = '<a href="http://localhost:8888/cameron_kozinski/index.php/Aysi_news/logout">Logout</a><br/>';
		}else{
			$login_showUser["result"] = '<a href="http://localhost:8888/cameron_kozinski/index.php/Aysi_news/join">Sign In | Sign Up</a>';
		}

		$this->load->model('model_get');
		$data["results"] = $this->model_get->getData('Sci/Tech');
		$this->load->view('head');
		$this->load->view('nav',$login_showUser);
		$this->load->view('content', $data);
		$this->load->view('footer');
	}

	public function politics()
	{	
		if ($this->session->userdata('is_logged_in')) {
			$login_showUser["result"] = '<a href="http://localhost:8888/cameron_kozinski/index.php/Aysi_news/logout">Logout</a><br/>';
		}else{
			$login_showUser["result"] = '<a href="http://localhost:8888/cameron_kozinski/index.php/Aysi_news/join">Sign In | Sign Up</a>';
		}

		$this->load->model('model_get');
		$data["results"] = $this->model_get->getData('Politics');
		$this->load->view('head');
		$this->load->view('nav',$login_showUser);
		$this->load->view('content', $data);
		$this->load->view('footer');
	}

	public function travel()
	{	
		if ($this->session->userdata('is_logged_in')) {
			$login_showUser["result"] = '<a href="http://localhost:8888/cameron_kozinski/index.php/Aysi_news/logout">Logout</a><br/>';
		}else{
			$login_showUser["result"] = '<a href="http://localhost:8888/cameron_kozinski/index.php/Aysi_news/join">Sign In | Sign Up</a>';
		}

		$this->load->model('model_get');
		$data["results"] = $this->model_get->getData('Travel');
		$this->load->view('head');
		$this->load->view('nav',$login_showUser);
		$this->load->view('content', $data);
		$this->load->view('footer');
	}

	public function sports()
	{	
		if ($this->session->userdata('is_logged_in')) {
			$login_showUser["result"] = '<a href="http://localhost:8888/cameron_kozinski/index.php/Aysi_news/logout">Logout</a><br/>';
		}else{
			$login_showUser["result"] = '<a href="http://localhost:8888/cameron_kozinski/index.php/Aysi_news/join">Sign In | Sign Up</a>';
		}

		$this->load->model('model_get');
		$data["results"] = $this->model_get->getData('Sports');
		$this->load->view('head');
		$this->load->view('nav',$login_showUser);
		$this->load->view('content', $data);
		$this->load->view('footer');
	}


	public function join()
	{	
		if ($this->session->userdata('is_logged_in')) {
			$login_showUser["result"] = '<a href="http://localhost:8888/cameron_kozinski/index.php/Aysi_news/logout">Logout</a><br/>';
		}else{
			$login_showUser["result"] = '<a href="http://localhost:8888/cameron_kozinski/index.php/Aysi_news/join">Sign In | Sign Up</a>';
		}

		$data["message"] = "";
		$this->load->view('head');
		$this->load->view('nav',$login_showUser);
		$this->load->view('join', $data);
		$this->load->view('footer');
	}

	public function set_user()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fName', 'First Name', 'required|alpha');
		$this->form_validation->set_rules('lName', 'Last Name', 'required');
		$this->form_validation->set_rules('userName', 'User Name', 'required|is_unique[Users.userName]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[Users.email]');
		$this->form_validation->set_rules('pass', 'Password', 'required');
		//$this->form_validation->set_rules('userfile', '*Image*', 'required');

		if($this->form_validation->run() == FALSE){
			
			$this->join();
			
		}else{

			$info = array(
			'fName' => $this->input->post('fName'),
			'lName' => $this->input->post('lName'),
			'userName' => $this->input->post('userName'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('pass'),
			//'userfile' => $this->input->post('userfile')
			);
			// Transfering Data To Model
			$this->load->model('insert_model');
			$this->insert_model->form_insert($info);
			if ($this->session->userdata('is_logged_in')) {
			$login_showUser["result"] = '<a href="http://localhost:8888/cameron_kozinski/index.php/Aysi_news/logout">Logout</a><br/>';
			}else{
				$login_showUser["result"] = '<a href="http://localhost:8888/cameron_kozinski/index.php/Aysi_news/join">Sign In | Sign Up</a>';
			}

			$data["message"] = "<h2>You are all set up! Now just login!</h2>";
			$this->load->view('head');
			$this->load->view('nav',$login_showUser);
			$this->load->view('join', $data);
			$this->load->view('footer');
		}
	}

	public function find_user()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'Email', 'required|callback_validate_user');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run()){

			$info = array(
				'email' => $this->input->post('email'),
				'is_logged_in' => 1
			);
			$this->session->set_userdata($info);
			$this->profile();
		}else{
			$this->join();
		}
	}

	public function validate_user(){
		$this->load->model('model_get');

		if ($this->model_get->userFind()) {
			return TRUE;
		}else{
			$this->form_validation->set_message('validate_user', 'Incorrect Email/Password');
			return FALSE;
		}

	}

	public function logout(){
		$this->session->sess_destroy();

		$this->home();
		
	}

	public function stories()
	{	
		if ($this->session->userdata('is_logged_in')) {
			$login_showUser["result"] = '<a href="http://localhost:8888/cameron_kozinski/index.php/Aysi_news/logout">Logout</a><br/>';
		}else{
			$login_showUser["result"] = '<a href="http://localhost:8888/cameron_kozinski/index.php/Aysi_news/join">Sign In | Sign Up</a>';
		}

		$info = $_GET['storyID'];
		$this->load->model('model_get');
		$data["results"] = $this->model_get->storyFind($info);

		$this->load->view('head');
		$this->load->view('nav',$login_showUser);
		$this->load->view('stories',$data);
		$this->load->view('footer');
	}

	public function writeStory(){
		if ($this->session->userdata('is_logged_in')) {
			$login_showUser["result"] = '<a href="http://localhost:8888/cameron_kozinski/index.php/Aysi_news/logout">Logout</a><br/>';
		}else{
			$login_showUser["result"] = '<a href="http://localhost:8888/cameron_kozinski/index.php/Aysi_news/join">Sign In | Sign Up</a>';
		}
		$this->load->view('head');
		$this->load->view('nav',$login_showUser);
		$this->load->view('writeStory');
		$this->load->view('footer');
		
	}

	public function addStory(){

		$this->load->library('form_validation');
		$this->form_validation->set_rules('type', 'Story Type', 'required');
		$this->form_validation->set_rules('Title', 'Title', 'required|max_length[250]');
		$this->form_validation->set_rules('subTitle', 'Sub-Title', 'required|max_length[250]');
		$this->form_validation->set_rules('story', 'Story', 'required');
		$this->form_validation->set_rules('link', 'Link', 'required');

		if($this->form_validation->run() == FALSE){
			
			$this->writeStory();
			
		}else{
			
			$type = str_replace("image/", ".", $_FILES['userfile']['type']);

			if ($type == ".jpeg" || $type == ".png") {
			$local = '/Users/Camski/Downloads/FullSail/ASL/ASL-GIT/cameron_kozinski/img/';
	        $imgName = $_FILES['userfile']['name'];
	        $tmp= $_FILES['userfile']['tmp_name'];
	        $img = $imgName;
	        move_uploaded_file($tmp,$local.$img);
			}else{
			    $img = "dragon_silhouette_.jpg";
			}						        
			
			$cont = $this->session->all_userdata();
			$email = $cont['email'];
			$info = array(
			'email' => $email,
			'type' => $this->input->post('type'),
			'Title' => $this->input->post('Title'),
			'subTitle' => $this->input->post('subTitle'),
			'story' => $this->input->post('story'),
			'link' => $this->input->post('link'),
			'img' => $img
			//'userfile' => $this->input->post('userfile')
			);
			// Transfering Data To Model
			$this->load->model('insert_model');
			$this->insert_model->insert_story($info);

			$this->profile();
			
		}

	}

	public function editProfile(){
		if ($this->session->userdata('is_logged_in')) {
			$login_showUser["result"] = '<a href="http://localhost:8888/cameron_kozinski/index.php/Aysi_news/logout">Logout</a><br/>';
		}else{
			$login_showUser["result"] = '<a href="http://localhost:8888/cameron_kozinski/index.php/Aysi_news/join">Sign In | Sign Up</a>';
		}
		$this->load->view('head');
		$this->load->view('nav',$login_showUser);
		$this->load->view('editProfile');
		$this->load->view('footer');
		
	}


	public function updateProfile(){

		$this->load->library('form_validation');
		$this->form_validation->set_rules('about', 'About You', 'required');

		if($this->form_validation->run() == FALSE){
			
			$this->editProfile();
			
		}else{
			
			$type = str_replace("image/", ".", $_FILES['userfile']['type']);

			if ($type == ".jpeg" || $type == ".png") {
			$local = '/Users/Camski/Downloads/FullSail/ASL/ASL-GIT/cameron_kozinski/img/';
	        $imgName = $_FILES['userfile']['name'];
	        $tmp= $_FILES['userfile']['tmp_name'];
	        $img = $imgName;
	        move_uploaded_file($tmp,$local.$img);
			}else{
			    $img = "dragon_silhouette_.jpg";
			}						        
			
			$info = array(
			'about' => $this->input->post('about'),
			'img' => $img
			//'userfile' => $this->input->post('userfile')
			);
			// Transfering Data To Model
			$this->load->model('insert_model');
			$this->insert_model->updateUserInfo($info);

			$this->profile();
			
		}
		
	}

	public function deleteStory(){
		$info = $_GET['storyID'];
		$this->load->model('insert_model');
		$this->insert_model->deleteStry($info);
		$this->profile();
	}

	public function updateUserStory(){
		if ($this->session->userdata('is_logged_in')) {
			$login_showUser["result"] = '<a href="http://localhost:8888/cameron_kozinski/index.php/Aysi_news/logout">Logout</a><br/>';
		}else{
			$login_showUser["result"] = '<a href="http://localhost:8888/cameron_kozinski/index.php/Aysi_news/join">Sign In | Sign Up</a>';
		}


		$this->load->view('head');
		$this->load->view('nav',$login_showUser);
		$this->load->view('updateStory');
		$this->load->view('footer');
		
	}

	public function updateUserStoryRun(){

		$this->load->library('form_validation');
		$this->form_validation->set_rules('type', 'Story Type', 'required');
		$this->form_validation->set_rules('Title', 'Title', 'required|max_length[250]');
		$this->form_validation->set_rules('subTitle', 'Sub-Title', 'required|max_length[250]');
		$this->form_validation->set_rules('story', 'Story', 'required');
		$this->form_validation->set_rules('link', 'Link', 'required');

		if($this->form_validation->run() == FALSE){
			
			$this->writeStory();
			
		}else{
			
			$type = str_replace("image/", ".", $_FILES['userfile']['type']);

			if ($type == ".jpeg" || $type == ".png") {
			$local = '/Users/Camski/Downloads/FullSail/ASL/ASL-GIT/cameron_kozinski/img/';
	        $imgName = $_FILES['userfile']['name'];
	        $tmp= $_FILES['userfile']['tmp_name'];
	        $img = $imgName;
	        move_uploaded_file($tmp,$local.$img);
			}else{
			    $img = "dragon_silhouette_.jpg";
			}						        
			
			$cont = $this->session->all_userdata();
			$email = $cont['email'];
			$info = array(
			'storyID' => $this->input->post('storyID'),
			'type' => $this->input->post('type'),
			'Title' => $this->input->post('Title'),
			'subTitle' => $this->input->post('subTitle'),
			'story' => $this->input->post('story'),
			'link' => $this->input->post('link'),
			'img' => $img
			//'userfile' => $this->input->post('userfile')
			);
			// Transfering Data To Model
			$this->load->model('insert_model');
			$this->insert_model->updateStry($info);

			$this->profile();
			
		}

	}
}
	





