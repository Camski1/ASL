<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aysi_news extends CI_Controller {
	public function index()
	{
		$this->home();
	}

	public function home()
	{	
		$this->load->model('model_get');
		$data["results"] = $this->model_get->getData('Camski');
		$this->load->view('head');
		$this->load->view('nav');
		$this->load->view('footer', $data);
	}

	public function us()
	{
		$this->load->view('head');
		$this->load->view('nav');
		$this->load->view('footer');
	}

	public function world()
	{
		$this->load->view('head');
		$this->load->view('nav');
		$this->load->view('footer');
	}

	public function sciTech()
	{
		$this->load->view('head');
		$this->load->view('nav');
		$this->load->view('footer');
	}

	public function politics()
	{
		$this->load->view('head');
		$this->load->view('nav');
		$this->load->view('footer');
	}

	public function travel()
	{
		$this->load->view('head');
		$this->load->view('nav');
		$this->load->view('footer');
	}

	public function sports()
	{
		$this->load->view('head');
		$this->load->view('nav');
		$this->load->view('footer');
	}


	public function join()
	{
		$this->load->view('head');
		$this->load->view('nav');
		$this->load->view('join');
		$this->load->view('footer');
	}
}





