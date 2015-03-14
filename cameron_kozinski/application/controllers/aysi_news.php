 
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aysi_news extends CI_Controller {
	public function index()
	{
		$this->home();
	}

	public function home()
	{	
		$this->load->model('model_get');
		$data["results"] = $this->model_get->getData('US');
		$this->load->view('head');
		$this->load->view('nav');
		$this->load->view('content', $data);
		$this->load->view('footer');
	}

	public function us()
	{	
		$this->load->model('model_get');
		$data["results"] = $this->model_get->getData('US');
		$this->load->view('head');
		$this->load->view('nav');
		$this->load->view('content', $data);
		$this->load->view('footer');
	}

	public function world()
	{	
		$this->load->model('model_get');
		$data["results"] = $this->model_get->getData('World');
		$this->load->view('head');
		$this->load->view('nav');
		$this->load->view('content', $data);
		$this->load->view('footer');
	}

	public function sciTech()
	{	
		$this->load->model('model_get');
		$data["results"] = $this->model_get->getData('Sci/Tech');
		$this->load->view('head');
		$this->load->view('nav');
		$this->load->view('content', $data);
		$this->load->view('footer');
	}

	public function politics()
	{	
		$this->load->model('model_get');
		$data["results"] = $this->model_get->getData('Politics');
		$this->load->view('head');
		$this->load->view('nav');
		$this->load->view('content', $data);
		$this->load->view('footer');
	}

	public function travel()
	{	
		$this->load->model('model_get');
		$data["results"] = $this->model_get->getData('Travel');
		$this->load->view('head');
		$this->load->view('nav');
		$this->load->view('content', $data);
		$this->load->view('footer');
	}

	public function sports()
	{	
		$this->load->model('model_get');
		$data["results"] = $this->model_get->getData('Sports');
		$this->load->view('head');
		$this->load->view('nav');
		$this->load->view('content', $data);
		$this->load->view('footer');
	}


	public function join()
	{	
		$data["message"] = "";
		$this->load->view('head');
		$this->load->view('nav');
		$this->load->view('join', $data);
		$this->load->view('footer');
	}

	public function set_user()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fName', '*First Name*', 'required|alpha');
		$this->form_validation->set_rules('lName', '*Last Name*', 'required');
		$this->form_validation->set_rules('userName', '*User Name*', 'required');
		$this->form_validation->set_rules('email', '*Email*', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('pass', '*Password*', 'required');
		//$this->form_validation->set_rules('userfile', '*Image*', 'required');

		if($this->form_validation->run() == FALSE){
			$data["message"] = "";
			$this->load->view('head');
			$this->load->view('nav');
			$this->load->view('join', $data);
			$this->load->view('footer');
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


			$data["message"] = "You are all set up! Now just login!";
			$this->load->view('head');
			$this->load->view('nav');
			$this->load->view('join', $data);
			$this->load->view('footer');
		}
	}

	public function find_user()
	{
		

		if(FALSE){
			$data["message"] = "Sorry Information Is incorrect";
			$this->load->view('head');
			$this->load->view('nav');
			$this->load->view('join', $data);
			$this->load->view('footer');
		}else{

			$email = $_GET['email'];
			$password = $_GET['password'];
			// Transfering Data To Model
			$this->load->model('model_get');
			$this->model_get->userFind($email,$password);


			$data["message"] = "It worked";
			$this->load->view('head');
			$this->load->view('nav');
			$this->load->view('join', $data);
			$this->load->view('footer');
		}
	}

	public function stories()
	{	
		$info = $_GET['storyID'];
		$this->load->model('model_get');
		$data["results"] = $this->model_get->storyFind($info);

		$this->load->view('head');
		$this->load->view('nav');
		$this->load->view('stories',$data);
		$this->load->view('footer');
	}
}





